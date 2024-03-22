<?php
namespace ruedas\f1; 
  /* 
   * Los _namespaces_ son una forma de encapsular elementos. Por ejemplo, 
   * en un sistema operativo los directorios sirven para encapsular 
   * ficheros relacionados. Podemos hacer lo mismo con clases y funciones
   * que tengan relación entre sí.
   * 
   * Proporcionan modularidad, y permiten crear _"paquetes"_ al estilo de 
   * Java de forma abstracta.
   * 
   * Imagínate que creas una función que se llame `db_connect` para un 
   * elemento en concreto, y que por tu código ya existe una función igual 
   * (por ejemplo importada con un require). En lugar de renombrar la 
   * función podemos separarla del resto con un `namespace` propio.
   * 
   * La definición de un `namespace` siempre tiene que estar por encima 
   * del resto del código, siendo la única excepción `declare`.
   * 
   * Se pueden crear espacios, o subespacios (subniveles con jerarquia) 
   */
  define(__NAMESPACE__ .'\pulgadas',13);
  define('pulgadas',18);
  echo pulgadas ."<br>"; /* 13 */ 
  echo \pulgadas ."<br>"; /* 18 */ 
  echo \ruedas\f1\pulgadas."<br>"; /* 13 */ 
  // echo ruedas\f1\pulgadas; /* Error */

?>