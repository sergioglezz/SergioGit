<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class ArticleController extends AbstractController
{

  public function index(string $_locale, int $year, string $slug, string $_format): JsonResponse
  {
    $message = 'Language Selected: ' . $_locale . ' Lamguage Selected: ' . $year . ' Slug Selected: ' . $slug . ' with format:' . $_format;
    return $this->json([
      'message' => $message,
      'path' => 'src/Controller/ArticleController.php',
    ]);
  }
}
