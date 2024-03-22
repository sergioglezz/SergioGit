<!DOCTYPE html>
<html>

<body>

  <h1>funciones variables</h1>

  <?php
  // Funciones variables
  /* 
   * PHP admite el concepto de funciones variables. 
   * Si un nombre de viable tiene paréntesis anexos a él, 
   * PHP buscará una función con el mismo nombre e intentará 
   * ejecutarla. 
   */
  function hola()
  {
    echo "Hola desde función variable <br />";
  }
  function mundo()
  {
    echo "Mundo desde funcion variable<br />";
  }
  function holamundo()
  {
    echo "hola mundo desde función de variables concatenadas <br />";
  }

  $funcionVariable = "hola";
  $funcionVariable(); //intenta ejecutar la funcion hola() 
  $funcionVariable2 = "mundo";
  $funcionVariable2(); //intenta ejecutar la funcion mundo()
  $funcionNueva = $funcionVariable . $funcionVariable2;
  $funcionNueva();


  // clousures
  /* Las _funciones anónimas_ permiten crear funciones sin nombre 
   * especificado. Son muy útiles para _callbacks_ (llamadas de retorno)
   */
  $saludo = function ($nombre) {
    printf("Hola %s\r\n", $nombre);
  };

  $saludo('Mundo');
  $saludo('PHP');


  ?>
</body>

</html>