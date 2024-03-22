<!DOCTYPE html>
<html>

<body>

  <h1>clases</h1>

  <?php

  /* 
   * Una _clase abstracta_ es una clase que contiene al 
   * menos un _método abstracto_. Un _método abstracto_ 
   * es un método que se declara, pero no se implementa 
   * en el código.
   */
  // Parent class
  abstract class Car
  {
    public $name;
    public function __construct($name)
    {
      $this->name = $name;
    }
    abstract public function intro(): string;
  }

  // Child classes
  class Audi extends Car
  {
    public function intro(): string
    {
      return "Choose German quality! I'm an $this->name!";
    }
  }

  class Volvo extends Car
  {
    public function intro(): string
    {
      return "Proud to be Swedish! I'm a $this->name!";
    }
  }

  class Citroen extends Car
  {
    public function intro(): string
    {
      return "French extravagance! I'm a $this->name!";
    }
  }

  // Create objects from the child classes
  $audi = new audi("Audi");
  echo $audi->intro();
  echo "<br>";

  $volvo = new volvo("Volvo");
  echo $volvo->intro();
  echo "<br>";

  $citroen = new citroen("Citroen");
  echo $citroen->intro();

  ?>
  <hr>
  <a href="./">primer ejemplo </a><br>
  <a href="./otro-ejemplo-1.php">otro ejemplo 1 </a><br>
  <a href="./otro-ejemplo-2.php">otro ejemplo 2 </a>
</body>

</html>