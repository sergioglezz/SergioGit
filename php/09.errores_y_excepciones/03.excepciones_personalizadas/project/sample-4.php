<!DOCTYPE html>
<html>

<body>

  <?php
  require_once "./index.php";

  // Ejemplo 4
  try {
    $o = new ProbarExcepción();
  } catch (Exception $e) {        // Saltado, sin excepción
    echo "Atrapada la Excepción Predeterminada<br>", $e;
  }

  // Continuar la ejecución
  var_dump($o); // ProbarExcepción
  echo "<br><br>";

  ?>

  <a href="./"> volver al index</a>
</body>

</html>