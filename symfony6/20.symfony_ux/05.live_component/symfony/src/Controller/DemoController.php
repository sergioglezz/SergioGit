<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DemoController extends AbstractController
{
    #[Route('/', name: 'app_live_component')]
    public function liveComponent(): Response
    {
        return $this->render('demo/demo.html.twig', []);
    }
}
