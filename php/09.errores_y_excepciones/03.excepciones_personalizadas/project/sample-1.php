<!DOCTYPE html>
<html>

<body>

  <?php
  require_once "./index.php";

  // Ejemplo 1
  try {
    $o = new ProbarExcepción(ProbarExcepción::THROW_CUSTOM);
  } catch (MiExcepción $e) {      // Será atrapada
    echo "Atrapada mi excepción<br>", $e;
    $e->funciónPersonalizada();
  } catch (Exception $e) {        // Skipped
    echo "Atrapada la Excepción Predeterminada<br>", $e;
  }

  // Continuar la ejecución
  var_dump($o); // Null
  echo "<br><br>";

  ?>

  <a href="./"> volver al index</a>
</body>

</html>