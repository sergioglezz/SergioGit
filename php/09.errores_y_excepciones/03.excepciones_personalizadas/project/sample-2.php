<!DOCTYPE html>
<html>

<body>

  <?php
  require_once "./index.php";

  // Ejemplo 2
  try {
    $o = new ProbarExcepción(ProbarExcepción::THROW_DEFAULT);
  } catch (MiExcepción $e) {      // Este tipo no coincide
    echo "Atrapada mi excepción<br>", $e;
    $e->funciónPersonalizada();
  } catch (Exception $e) {        // Will be caught
    echo "Atrapada la Excepción Predeterminada<br>", $e;
  }

  // Continuar la ejecución
  var_dump($o); // Null
  echo "<br><br>";

  ?>

  <a href="./"> volver al index</a>
</body>

</html>