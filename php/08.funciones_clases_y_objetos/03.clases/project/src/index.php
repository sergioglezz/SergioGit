<!DOCTYPE html>
<html>

<body>

  <h1>clases</h1>

  <?php
  // 
  /* 
   * Una clase es un objeto de datos, un modelo con un conjunto de datos 
   * y métodos. Cada objeto creado a partir de la clase es una instancia de la misma.
   */
  class Coche{
    public $marca;
    public $velocidad_maxima;
    function getMarca() { 
      return $this->marca;
    }
    function setMarca($marca) { 
      $this->marca=$marca;
    } 
  }
  /* Creamos una instancia */
  $auto = new Coche();
  /* definimos una propiedad mediante un método */ 
  $auto->setMarca("frenault");
  /* Obtenemos una propiedad */ 
  var_dump($auto->getMarca());

  ?>
</body>

</html>