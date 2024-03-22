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
  interface Animal {
    public function makeSound();
  }
  
  class Cat implements Animal {
    public function makeSound() {
      echo "Meow";
    }
  }
  
  $animal = new Cat();
  $animal->makeSound();

  ?>
  <hr>
  <a href="./">primer ejemplo </a><br>
  <a href="./otro-ejemplo.php">otro ejemplo</a><br>
</body>

</html>