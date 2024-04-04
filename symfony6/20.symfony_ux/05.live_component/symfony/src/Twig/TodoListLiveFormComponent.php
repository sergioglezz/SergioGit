<?php

namespace App\Twig;

use App\Entity\TodoList;
use App\Form\TodoListForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormInterface;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\LiveCollectionTrait;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent('todo_list_live_form')]
class TodoListLiveFormComponent extends AbstractController
{
    use LiveCollectionTrait;
    use DefaultActionTrait;

    #[LiveProp(fieldName: 'formData')]
    public ?TodoList $todoList;

    protected function instantiateForm(): FormInterface
    {
        return $this->createForm(
            TodoListForm::class,
            $this->todoList
        );
    }

}