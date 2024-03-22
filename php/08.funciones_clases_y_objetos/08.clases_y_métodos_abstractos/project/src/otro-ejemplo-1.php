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
  abstract class ParentClass {
    // Abstract method with an argument
    abstract protected function prefixName($name);
  }
  
  class ChildClass extends ParentClass {
    public function prefixName($name) {
      if ($name == "John Doe") {
        $prefix = "Mr.";
      } elseif ($name == "Jane Doe") {
        $prefix = "Mrs.";
      } else {
        $prefix = "";
      }
      return "{$prefix} {$name}";
    }
  }
  
  $class = new ChildClass;
  echo $class->prefixName("John Doe");
  echo "<br>";
  echo $class->prefixName("Jane Doe");

  ?>
  <hr>
  <a href="./">primer ejemplo </a><br>
  <a href="./otro-ejemplo-1.php">otro ejemplo 1 </a><br>
  <a href="./otro-ejemplo-2.php">otro ejemplo 2 </a>
</body>

</html>