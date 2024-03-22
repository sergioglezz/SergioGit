<!DOCTYPE html>
<html>

<body>

  <h1>funciones con fechas</h1>

  <?php
  // sintaxis date(format,timestamp)
  echo "Hoy es " . date("Y/m/d") . "<br>";
  echo "Hoy es " . date("Y.m.d") . "<br>";
  echo "Hoy es " . date("Y-m-d") . "<br>";
  echo "Hoy es " . date("l");
  // obtener una hora
  echo "La hora es " . date("h:i:sa");
  // zona horaria
  date_default_timezone_set("America/New_York");
  echo "La hora es " . date("h:i:sa");

  date_default_timezone_set("Europe/Madrid");
  echo "La hora es " . date("h:i:sa");
  //
  $d = mktime(11, 14, 54, 8, 12, 2014);
  echo "La fecha de creación es " . date("Y-m-d h:i:sa", $d);
  //
  $d = strtotime("10:30pm 15 de abril de 2014");
  echo "La fecha de creación es " . date("Y-m-d h:i:sa", $d);
  //
  $d = strtotime("tomorrow");
  echo date("Y-m-d h:i:sa", $d) . "<br>";

  $d = strtotime("next saturday");
  echo date("Y-m-d h:i:sa", $d) . "<br>";

  $d = strtotime("+3 months");
  echo date("Y-m-d h:i:sa", $d) . "<br>";
  // muestra las fechas de los próximos seis sábados
  $fechainicial = strtotime("saturday");
  $fechafinal = strtotime("+6 weeks", $fechainicial);

  while ($fechainicial < $fechafinal) {
    echo date("M d", $fechainicial) . "<br>";
    $fechainicial = strtotime("+1 week", $fechainicial);
  }
  // muestra el número de días que faltan para el 4 de julio
  $d1 = strtotime("04 July");
  $d2 = ceil(($d1 - time()) / 60 / 60 / 24);
  echo "Faltan " . $d2 . " días para el 4 de julio";
  ?>
</body>

</html>