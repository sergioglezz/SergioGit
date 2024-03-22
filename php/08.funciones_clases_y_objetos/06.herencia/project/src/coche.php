<!DOCTYPE html>
<html>

<body>

  <h1>herencia</h1>

  <?php
  /* 
   * Las clases extendidas pueden 
   * sobrescribir métodos para cambiar las funciones originales. 
   */
  class Coche{
    public $marca;
    protected $velocidad_maxima; 
    private $seguridad_ncap;
    function __construct($marca,$velocidad_maxima, $seguridad_ncap) { 
      $this->marca = $marca;
      $this->velocidad_maxima = $velocidad_maxima; 
      $this->seguridad_ncap = $seguridad_ncap;
    }
    function arrancaMotor(){ 
      echo "brrum! <br>";
    } 
  }
  class CocheF1 extends Coche{
    public function arrancaMotor(){ 
        echo "BRUUM!! brrum!BRUUM!!<br>";
    } 
  }
  $auto = new CocheF1("McClaren",90,4); 
  /* constructor heredado */ 
  $auto->arrancaMotor(); 
  /* BRUUM!! brrum!BRUUM!!*/
  ?>
</body>

</html>