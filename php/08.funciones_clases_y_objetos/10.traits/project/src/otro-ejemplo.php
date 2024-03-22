<!DOCTYPE html>
<html>

<body>

  <h1>traits</h1>

  <?php
  /* 
 * PHP sólo admite la herencia simple: una clase hija 
 * sólo puede heredar de un único padre.
 * Entonces, ¿qué pasa si una clase necesita heredar
 *  múltiples comportamientos? Los rasgos OOP resuelven
 *  este problema.
 * Los _traits_ son usados para declarar métodos 
 * que pueden ser usados en múltiples clases. 
 * Los _traits_ pueden tener métodos y métodos 
 * abstractos que pueden ser utilizados en múltiples 
 * clases, y los métodos pueden tener cualquier 
 * modificador de acceso (público, privado o protegido).
 */
  trait message1
  {
    public function msg1()
    {
      echo "OOP is fun! ";
    }
  }

  trait message2
  {
    public function msg2()
    {
      echo "OOP reduces code duplication!";
    }
  }

  class Welcome
  {
    use message1;
  }

  class Welcome2
  {
    use message1, message2;
  }

  $obj = new Welcome();
  $obj->msg1();
  echo "<br>";

  $obj2 = new Welcome2();
  $obj2->msg1();
  $obj2->msg2();
  ?>
  <hr>
  <a href="./">primer ejemplo </a><br>
  <a href="./otro-ejemplo.php">otro ejemplo</a><br>
</body>

</html>