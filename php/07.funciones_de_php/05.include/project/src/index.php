<html>

<body>
  <div class="menu">
    <?php include 'menu.php'; ?>
  </div>

  <!-- begin:: variables -->
  <h1>Welcome to my home page!</h1>
  <?php
  include 'vars.php';
  echo "I have a $color $car.";
  ?>
  <!-- end:: variables -->

  <!--begin:: no found 
  Sin embargo, hay una gran diferencia entre `include` y `require`; 
  cuando se incluye un archivo con la sentencia `include` y 
  PHP no lo encuentra, el script seguirá ejecutándose
  -->
  <?php
  include 'noFileExists.php';
  echo "I have a $color $car.";
  ?>
  <!--begin:: no found 
  Si hacemos el mismo ejemplo utilizando la sentencia require, la sentencia 
  echo no se ejecutará porque la ejecución del script muere después de 
  que la sentencia require devolviera un _error fatal_
  -->
  <?php
  /*
  require 'noFileExists.php';
  echo "I have a $color $car.";
  */
  ?>
  <!-- end:: no found -->
  
  <!--
  La palabra clave `include_once` se utiliza para incrustar código PHP desde 
  otro archivo. Si el archivo no se encuentra, se muestra una advertencia 
  y el programa continúa ejecutándose. Si el archivo ya fue incluido previamente, 
  esta sentencia no lo incluirá de nuevo.
  -->
  <h1>Welcome to my home page!</h1>
  <p>Some text.</p>
  <p>Some more text.</p>
  <?php include 'footer.php'; ?>

</body>

</html>