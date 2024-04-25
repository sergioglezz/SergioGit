<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class CustomRouteController extends AbstractController
{
    #[Route('/custom/route/{extra}', name: 'custom_route')]
    public function index(): Response
    {
        return $this->render('custom_route/index.html.twig',[
            'controller_name' => 'CustomRouteController',
        ]);
    }

    public function extra($parameter): Response
    {
        return $this->render('custom_route/index.html.twig',[
            'parameter' => $parameter,
            'controller_name' => 'CustomRouteController',
        ]);
    }
}
