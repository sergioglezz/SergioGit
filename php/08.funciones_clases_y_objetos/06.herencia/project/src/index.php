<!DOCTYPE html>
<html>

<body>

  <h1>herencia</h1>

  <?php
  /* 
   * Las clases pueden extenderse, y al hacerlo, 
   * recibirán por herencia todos los métodos públicos y protegidos
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
    public function rompeMotor(){
    echo "El motor del ".$this->marca. " dice adios
                            al llegar a los ". $this->velocidad_maxima. "km/h <br>";
    } 
  }
  $auto = new CocheF1("McClaren",90,4); 
  /* constructor heredado */ 
  $auto->arrancaMotor();
  $auto->rompeMotor();
  ?>
</body>

</html>