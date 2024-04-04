<?php

namespace App\Controller;


use App\Form\TodoListForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
// forms
// entities
use App\Entity\TodoItem;
use App\Entity\TodoList;
// repositories
use App\Repository\TodoListRepository;

#[Route('/collection-type')]
class CollectionTypeController extends AbstractController
{
    
    #[Route('/{id}', name: 'app_live_components_demo_form_collection_type', defaults: ['id' => 1])]
    public function demoFormCollectionType( Request $request, TodoListRepository $todoListRepository, TodoList $todoList = null): Response
    {
        if (!$todoList) {
            $todoList = new TodoList();
            $todoList->addTodoItem(new TodoItem());
        }
        $form = $this->createForm(TodoListForm::class, $todoList);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $todoListRepository->add($form->getData(), true);
            $this->addFlash('live_demo_success', 'Excellent! With this to-do list, I won’t miss anything.');

            return $this->redirectToRoute('app_live_components_demo_form_collection_type', [
                'id' => $todoList->getId(),
            ]);
        }

        return $this->renderForm('live_component_demo/form_collection_type.html.twig', [
            'form' => $form,
            'todo' => $todoList
        ]);
    }

}