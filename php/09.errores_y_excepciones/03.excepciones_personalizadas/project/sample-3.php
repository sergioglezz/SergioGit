<!DOCTYPE html>
<html>

<body>

  <?php
  require_once "./index.php";

  // Ejemplo 3
  try {
    $o = new ProbarExcepción(ProbarExcepción::THROW_CUSTOM);
  } catch (Exception $e) {        // Será atrapada
    echo "Atrapada la Excepción Predeterminada<br>", $e;
  }

  // Continuar la ejecución
  var_dump($o); // Null
  echo "<br><br>";

  ?>

  <a href="./"> volver al index</a>
</body>

</html>