<!DOCTYPE html>
<html>

<body>

  <?php

  include 'intro.php'; ?>

  <h2>1. Union Types</h2>
  <p>Una de las características más demandadas desde que comenzamos a poder <strong>tipar</strong> los argumentos de funciones y métodos era la posibilidad de especificar varios tipos para un argumento y el retorno de una función.</p>
  <p>Los <strong>union types</strong> son una colección de dos o más tipos de modo que indiquemos que cualquiera de ellos es válido cuando especifiquemos el valor de ese argumento o el tipo de retorno de la función.</p>
  <pre>
  function unionTypesFunction(String|Integer $foo): String|Integer{
    return $foo;
  };
  </pre>
  <?php
  use phpDocumentor\Reflection\Types\Integer;
  function unionTypesFunction(String|Integer $foo): String|Integer{
    return $foo;
  };
  var_dump(unionTypesFunction(10));
  var_dump(unionTypesFunction('prueba'));
  ?>

</body>

</html>