<!DOCTYPE html>
<html>

<body>

  <h1>switch</h1>

  <?php
  $i = 1;
  switch ($i) {
    case 0:
      echo "i es igual a 0";
      break;
    case 1:
      echo "i es igual a 1";
      break;
    case 2:
      echo "i es igual a 2";
      break;
  }

  //
  $i = 1;
  switch ($i) {
    case 0:
      echo "i es igual a 0";
      break;
    case 1:
      echo "i es igual a 1";
      break;
    case 2:
      echo "i es igual a 2";
      break;
    default:
      echo "i no es un valor entre 0 y 2";
  }
  ?>

</body>

</html>