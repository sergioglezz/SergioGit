<!DOCTYPE html>
<html>

<body>

  <h1>introducción</h1>

  <?php
  // definir una función
  function suma($num1, $num2)
  {
    return $num1 + $num2;
  }
  echo suma(3, 5);
  /* tipos de argumentos
 */
  function modificar_cadena(&$cadena)
  {
    $cadena .= "-Modificado";
  }
  $texto = "Esto es una cadena";
  modificar_cadena($texto);
  echo $texto;
  //Muestra "Esto es una cadena-Modificado"

  // argumentos predeterminados
  function mostrar_comida($comida = "pollo")
  {
    echo "Hoy tenemos $comida para comer\n";
  }
  mostrar_comida(); //Hoy tenemos pollo para comer 
  mostrar_comida(null); //Hoy tenemos para comer 
  mostrar_comida("pasta"); //Hoy tenemos pasta para comer

  // devolver valores

  function suma1($num1, $num2)
  {
    return $num1 + $num2;
  }
  echo var_dump(suma1(3, 5));

  function suma2($num1, $num2): float
  {
    return $num1 + $num2;
  }
  echo var_dump(suma2(3, 5));


  ?>
</body>

</html>