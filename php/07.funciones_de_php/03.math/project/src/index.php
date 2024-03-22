<!DOCTYPE html>
<html>

<body>

  <h1>funciones con números</h1>

  <?php
  // Pi
  echo (pi()); // devuelve 3.1415926535898
  // `min()` y `max()`
  echo (min(0, 150, 30, 20, -8, -200)); // devuelve -200
  echo (max(0, 150, 30, 20, -8, -200)); // devuelve 150
  // `abs()` devuelve el valor absoluto (positivo)
  echo (abs(-6.7)); // devuelve 6.7
  // `sqrt()` devuelve la raíz cuadrada de un número
  echo (sqrt(64)); // devuelve 8
  // `round()` redondea un número de punto flotante a su entero más cercano
  echo (round(0.60)); // devuelve 1
  echo (round(0.49)); // devuelve 0
  // Números aleatorios
  echo (rand());
  echo (rand(10, 100));
  ?>
</body>

</html>