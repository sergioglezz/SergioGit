<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstPageController extends AbstractController
{
    /**
     * @Route("/first", name="first")
     */
    public function index(): Response
    {
        return $this->render('first/index.html.twig', [
            'controller_name' => 'FirstController',
        ]);
    }

    /**
     * @Route("/second", name="second")
     */
    public function second(): Response
    {
        return $this->render('first/index.html.twig', [
            'controller_name' => 'SecondController',
        ]);
    }
}
