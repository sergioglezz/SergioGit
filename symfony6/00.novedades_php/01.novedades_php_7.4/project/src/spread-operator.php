<!DOCTYPE html>
<html>

<body>

  <?php include 'intro.php'; ?>


  <h2>5. Operador spread para arrays</h2>
  <?php
  $foo = [1, 2, 3];
  $bar = ['a', 'b', 'c'];
  $result = [0, ...$foo, ...$bar, 'd'];
  // 0, 1, 2, 3, 'a', 'b', 'c', 'd'
  ?>
  <blockquote>
    <p>☕ <em>Eso sí, de momento <strong>sólo es posible usarlo con arrays que tengan claves numéricas</strong> por lo que habrá que esperar a una siguiente versión para emplear este operador con arrays asociativos.</em></p>
  </blockquote>

</body>

</html>