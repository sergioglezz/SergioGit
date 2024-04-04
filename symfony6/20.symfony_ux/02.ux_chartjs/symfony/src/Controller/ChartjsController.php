<?php

namespace App\Controller;

use App\Repository\DailyResultRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;

class ChartjsController extends AbstractController
{
  #[Route("/", name: "chartjs")]
  public function index(DailyResultRepository $dailyResultRepository, ChartBuilderInterface $chartBuilder): Response
  {

    $dailyResults = $dailyResultRepository->findAll();

    $labels = [];
    $data = [];

    foreach ($dailyResults as $dailyResult) {
      $labels[] = $dailyResult->getDate()->format('d/m/Y');
      $data[] = $dailyResult->getValue();
    }

    $chart = $chartBuilder->createChart(Chart::TYPE_LINE);
    $chart->setData([
      'labels' => $labels,
      'datasets' => [
        [
          'label' => 'My First dataset',
          'backgroundColor' => 'rgb(255, 99, 132)',
          'borderColor' => 'rgb(255, 99, 132)',
          'data' => $data,
        ],
      ],
    ]);

    $chart->setOptions([]);


    return $this->render('chartjs/index.html.twig', [
      'controller_name' => 'ChartjsController',
      'chart' => $chart,
    ]);
  }


  #[Route("/chartjs", name: "app_chartjs")]
  public function chartjs(ChartBuilderInterface $chartBuilder): Response
  {
    $chart = $chartBuilder->createChart(Chart::TYPE_LINE);

    $chart->setData([
      'labels' => ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      'datasets' => [
        ['label' => 'Cookies eaten 🍪', 'data' => [2, 10, 5, 18, 20, 30, 45]],
        ['label' => 'Km walked 🏃‍♀️', 'data' => [10, 15, 4, 3, 25, 41, 25]],
      ],
    ]);

    return $this->render('chartjs/index.html.twig', [
      'controller_name' => 'ChartjsController',
      'chart' => $chart,
    ]);
  }
}
