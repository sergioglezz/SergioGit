<?php
// src/Components/ProductSearchComponent.php
namespace App\Components;

use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\DefaultActionTrait;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
// repositories
use App\Repository\ProductRepository;

#[AsLiveComponent('product_search')]
class ProductSearchComponent
{
  use DefaultActionTrait;

  #[LiveProp(writable: true)]
  public string $query = '';

  public function __construct(private ProductRepository $productRepository)
  {
  }

  public function getProducts(): array
  {
    if ($this->query != '') {
      $products = $this->productRepository->search($this->query);
    } else {
      $products = $this->productRepository->findAll();
    }
    // example method that returns an array of Products
    return $products;
  }
}
