<!DOCTYPE html>
<html>

<body>

  <?php include 'intro.php'; ?>

  <h2>1. Funciones flecha</h2>
  <p>Las <strong>arrow functions</strong> llegan por fin a PHP algo que seguro agradecéis aquellos que también programéis en Javascript. Estas funciones, también conocidas como <strong>short closures</strong> permiten escribir funciones cortas de una forma menos <strong>verbosa</strong>.</p>
  <?php
  class Product
  {
    public $name;
    public $price;
    function getName()
    {
      return $this->name;
    }
    function setName($name)
    {
      $this->name = $name;
    }
    function getPrice()
    {
      return $this->price;
    }
    function setPrice($price)
    {
      $this->price = $price;
    }
  }
  /* Creamos una instancia */
  $product = new Product();
  /* definimos una propiedad mediante un método */
  $product->setName("frenault");
  $product->setPrice(20.3);
  $products[] = $product;
  $product = new Product();
  /* definimos una propiedad mediante un método */
  $product->setName("faudi");
  $product->setPrice(40.4);
  $products[] = $product;
  // antes
  $prices = array_map(function (Product $product) {
    return $product->getPrice();
  }, $products);
  var_dump($prices);
  // ahora
  $prices = array_map(fn ($product) => $product->getPrice(), $products);
  var_dump($prices);
  // tb podemos tiparlos
  $prices = array_map(fn (Product $product): float => $product->getPrice(), $products);
  var_dump($prices);
  // otro ejemplo
  $multiplier = 5;
  $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
  var_dump(array_map(fn ($x) => $x * $multiplier, $numbers));
  ?>

</body>

</html>