<!DOCTYPE html>
<html>

<body>

  <h1>interfaces</h1>

  <?php

  /* 
   * Las interfaces le permiten especificar qué 
   * métodos debe implementar una clase. 
   * Las interfaces facilitan el uso de una variedad de 
   * clases diferentes de la misma manera. Cuando una o 
   * más clases utilizan la misma interfaz, se denomina 
   * "polimorfismo".
   */
  // Interface definition
  interface Animal
  {
    public function makeSound();
  }

  // Class definitions
  class Cat implements Animal
  {
    public function makeSound()
    {
      echo " Meow ";
    }
  }

  class Dog implements Animal
  {
    public function makeSound()
    {
      echo " Bark ";
    }
  }

  class Mouse implements Animal
  {
    public function makeSound()
    {
      echo " Squeak ";
    }
  }

  // Create a list of animals
  $cat = new Cat();
  $dog = new Dog();
  $mouse = new Mouse();
  $animals = array($cat, $dog, $mouse);

  // Tell the animals to make a sound
  foreach ($animals as $animal) {
    $animal->makeSound();
  }
  ?>
  <hr>
  <a href="./">primer ejemplo </a><br>
  <a href="./otro-ejemplo.php">otro ejemplo</a><br>
</body>

</html>