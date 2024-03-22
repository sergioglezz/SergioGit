<!DOCTYPE html>
<html>

<body>

  <h1>bucles</h1>

  <?php
  // while
  $num = 1;
  while ($num <= 100) {
    echo $num . ", ";
    $num++;
  }
  // while
  $x = 1;

  while ($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
  }

  $x = 0;

  while ($x <= 100) {
    echo "The number is: $x <br>";
    $x += 10;
  }
  // do ... while
  $num = 1;
  do {
    echo $num . ", ";
    $num++;
  } while ($num <= 100);
  // for
  // Muestra los números del 1 al 10
  for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
  }
  // Muestra los números del 1 al 100 de 10 en 10
  for ($x = 0; $x <= 100; $x += 10) {
    echo "The number is: $x <br>";
  }

  $personas = [
    [
      'nombre' => 'Miquel',
      'salt' => 1234567
    ], [
      'nombre' => 'Olga',
      'salt' => 87654321
    ]
  ];
  for ($i = 0; $i < count($personas); ++$i) {
    $personas[$i]['salt'] = mt_rand(000000, 999999);
    var_dump($personas);
  }
  for ($i = 0, $size = count($personas); $i < $size; ++$i) {
    $personas[$i]['salt'] = mt_rand(000000, 999999);
    var_dump($personas);
  }

  // foreach
  $array = [1, 2, 3, 4];
  foreach ($array as &$valor) {
    $valor = $valor * 2;
  }
  // $array ahora es [2, 4, 6, 8]
  unset($valor); // rompe la referencia con el último elemento
  foreach ($array as $clave => $valor) {
    echo "Clave: $clave; Valor: $valor<br />\n";
  }

  // break
  for ($i = 1; $i <= 100; $i++) {
    echo $i . ", ";
    if ($i % 5 == 0) {
      break;
    }
  }

  // continue
  for ($i = 1; $i <= 100; $i++) {
    if ($i % 5 == 0) {
      continue;
    }
    echo $i . ", ";
  }

  // Go To
  $i = 2;

  if ($i > 1) {
    goto a;
  } else {
    echo "Mensaje que no vemos\n";
  }

  a:
  for ($i = 5; $i <= 10; $i++) {
    echo $i;
  }
  // Go To
  $i = 2;

  if ($i > 1) {
    goto a;
  } else {
    echo "Mensaje que no vemos\n";
  }

  a:
  for ($i = 5; $i <= 10; $i++) {
    echo $i;
  }
  ?>

</body>

</html>