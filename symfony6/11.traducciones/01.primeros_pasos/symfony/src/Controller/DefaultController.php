<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Contracts\Translation\TranslatorInterface;
// service
use Psr\Log\LoggerInterface;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'default')]
    public function index(TranslatorInterface $translator): Response
    {
        $translated = $translator->trans ('Hello');
        dump($translated);
        $name = 'Manolo';
        $count = 2;
        $translated = $translator->trans (
            'Hello %name%',
            [ '%name%' => $name ]
        );
        dump($translated);
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'name'=> $name,
            'count' => $count
        ]);
    }
}
