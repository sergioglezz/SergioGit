<!DOCTYPE html>
<html>

<body>

  <h1>clases</h1>

  <?php
  // 
  /* 
   * Las clases pueden tener constructores (`__construct`) 
   * con los que podemos inicializar las propiedades del 
   * objeto o realizar alguna función al crearse.
   */
  class Coche
  {
    public $marca;
    public $velocidad_maxima;
    function __construct($marca, $velocidad_maxima)
    {
      $this->marca = $marca;
      $this->velocidad_maxima = $velocidad_maxima;
    }
    function getMarca()
    {
      return $this->marca;
    }
    // ...
  }
  /* Creamos una instancia */
  $auto = new Coche("frenault", 90);
  /* definimos una propiedad mediante un método */
  var_dump($auto->getMarca());

  ?>
</body>

</html>