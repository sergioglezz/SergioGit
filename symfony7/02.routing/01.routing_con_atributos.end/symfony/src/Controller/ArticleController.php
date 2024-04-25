<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

#[Route("/blog")]
class ArticleController extends AbstractController
{

  /**
   * Matches /blog/article/en/2010/my-post
   * Matches /blog/article/fr/2010/my-post.rss
   * Matches /blog/article/en/2013/my-latest-post.html
   */
  #[Route(
    '/article/{_locale}/{year}/{slug}.{_format}',
    name: 'article',
    defaults: ['_format' => 'html'],
    requirements: [
      '_locale' => 'en|fr',
      '_format' => 'html|rss',
      'year' => '\d+'
    ]
  )]
  public function index(string $_locale, int $year, string $slug, string $_format): JsonResponse
  {
    $message = 'Language Selected: ' . $_locale . ' Lamguage Selected: ' . $year . ' Slug Selected: ' . $slug . ' with format:' . $_format;
    return $this->json([
      'message' => $message,
      'path' => 'src/Controller/ArticleController.php',
    ]);
  }
}
