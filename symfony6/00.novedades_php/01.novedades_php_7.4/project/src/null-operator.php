<!DOCTYPE html>
<html>

<body>

  <?php include 'intro.php'; ?>

  <h2>4. Nuevo operador: Null coalescing assignment operator</h2>
  <p><em>fusión de null</em> <code>$a ?? $b</code> - El primer operando de izquierda a derecha que exista y no sea <code>NULL</code>. <code>NULL</code> si no hay valores definidos y no son <code>NULL</code>. 👀<em>Disponible a partir de PHP 7</em>👀</p>

  <?php
  // antes
  $someArray['key'] = $someArray['key'] ?? 'foo';
  var_dump($someArray);
  //Ahora
  $someArray['key'] ??= 'foo';
  var_dump($someArray);
  ?>

</body>

</html>