<?php
  const PULGADAS = 26; 
  function desplazarse() {
    echo "mi mtb me desplaza sin contaminar <br>"; 
  }
  class Bici{
    static function tamanyo_ruedas() {
      echo "ruedas de: ".PULGADAS."<br>"; 
      }
  }
  desplazarse(); 
  Bici::tamanyo-ruedas(); 
  echo PULGADAS."<br>";
  /*
  mi mtb me desplaza sin contaminar
  ¿y el resto?
  */
?>