<!DOCTYPE html>
<html>

<body>

  <h1>funciones con números</h1>

  <?php
  // es entero ??
  /* PHP tiene las siguientes constantes predefinidas para los enteros:
   * `PHP_INT_MAX` - El mayor entero soportado
   * `PHP_INT_MIN` - El entero más pequeño soportado
   * `PHP_INT_SIZE` - El tamaño de un entero en bytes
   * Funciones
   * `is_int()`
   * `is_integer()` - alias de `is_int()`
   * `is_long()` - alias de `is_int()`
   */
  $x = 5985;
  var_dump(is_int($x));

  $x = 59.85;
  var_dump(is_int($x));
  // es float ??
  /* 
   * `PHP_FLOAT_MAX` - El mayor número de punto flotante representable
   * `PHP_FLOAT_MIN` - El menor número de punto flotante positivo representable
   * `PHP_FLOAT_MAX` - El menor número de punto flotante negativo representable
   * `PHP_FLOAT_DIG` - El número de dígitos decimales que pueden ser redondeados a un flotante y viceversa sin pérdida de precisión
   * `PHP_FLOAT_EPSILON` - El menor número positivo representable `x`, de manera que `x + 1.0 != 1.0`
   * Funciones
   * `is_float()`
   * `is_double()` - alias de `is_float()`
   */
  $x = 10.365;
  var_dump(is_float($x));
  // infinito - Un valor numérico que es mayor que `PHP_FLOAT_MAX` se considera infinito.
  /* 
   * `is_finite()`
   * `is_infinite()`
   */
  $x = 1.9e411;
  var_dump($x);
  // NaN - `NaN` significa `Not a Number` (no es un número).
  /* 
   * `is_nan()`
   */
  $x = acos(8); // Devuelve el arco coseno
  var_dump($x);
  // cadenas numéricas
  $x = 5985;
  var_dump(is_numeric($x));

  $x = "5985";
  var_dump(is_numeric($x));

  $x = "59.85" + 100;
  var_dump(is_numeric($x));

  $x = "Hello";
  var_dump(is_numeric($x));
  // Conversión de cadenas y flotantes a enteros en PHP
  // Cast float to int
  $x = 23465.768;
  $int_cast = (int)$x;
  echo $int_cast;

  echo "<br>";

  // Cast string to int
  $x = "23465.768";
  $int_cast = (int)$x;
  echo $int_cast;
  ?>
</body>

</html>