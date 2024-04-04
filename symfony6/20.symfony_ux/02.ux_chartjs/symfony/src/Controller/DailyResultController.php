<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
// entities
use App\Entity\DailyResult;
// repositories
use App\Repository\DailyResultRepository;
// forms
use App\Form\DailyResultType;


#[Route("/daily/result")]
class DailyResultController extends AbstractController
{
    #[Route("/", name: "daily_result_index", methods: ["GET"])]
    public function index(DailyResultRepository $dailyResultRepository): Response
    {
        return $this->render('daily_result/index.html.twig', [
            'daily_results' => $dailyResultRepository->findAll(),
        ]);
    }

    #[Route("/new", name: "daily_result_new", methods: ["GET","POST"])]
    public function new(Request $request, ManagerRegistry $doctrine): Response
    {
        $dailyResult = new DailyResult();
        $form = $this->createForm(DailyResultType::class, $dailyResult);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $doctrine->getManager();
            $entityManager->persist($dailyResult);
            $entityManager->flush();

            return $this->redirectToRoute('daily_result_index');
        }

        return $this->render('daily_result/new.html.twig', [
            'daily_result' => $dailyResult,
            'form' => $form->createView(),
        ]);
    }

    #[Route("/{id}", name: "daily_result_show", methods: ["GET"])]
    public function show(DailyResult $dailyResult): Response
    {
        return $this->render('daily_result/show.html.twig', [
            'daily_result' => $dailyResult,
        ]);
    }

    #[Route("/{id}/edit", name: "daily_result_edit", methods: ["GET","POST"])]
    public function edit(Request $request, ManagerRegistry $doctrine, DailyResult $dailyResult): Response
    {
        $form = $this->createForm(DailyResultType::class, $dailyResult);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('daily_result_index');
        }

        return $this->render('daily_result/edit.html.twig', [
            'daily_result' => $dailyResult,
            'form' => $form->createView(),
        ]);
    }

    #[Route("/{id}", name: "daily_result_delete", methods: ["DELETE"])]
    public function delete(Request $request, ManagerRegistry $doctrine, DailyResult $dailyResult): Response
    {
        if ($this->isCsrfTokenValid('delete'.$dailyResult->getId(), $request->request->get('_token'))) {
            $entityManager = $doctrine->getManager();
            $entityManager->remove($dailyResult);
            $entityManager->flush();
        }

        return $this->redirectToRoute('daily_result_index');
    }
}
