<!DOCTYPE html>
<html>

<body>

  <h1>try catch</h1>

  <?php
  // 
  function divide($dividend, $divisor)
  {
    if ($divisor == 0) {
      throw new Exception("Division by zero");
    }
    return $dividend / $divisor;
  }
  echo divide(5, 1);
  echo divide(5, 0);

  ?>

  <a href="./logs.php">errores en logs </a>
</body>

</html>