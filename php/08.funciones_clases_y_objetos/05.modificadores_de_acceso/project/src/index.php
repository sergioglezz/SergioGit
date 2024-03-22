<!DOCTYPE html>
<html>

<body>

  <h1>modificadores de acceso</h1>

  <?php
  /* 
   * `public`: Un atributo/método público estará disponible en 
   * todo nuestro código, otras clases e instancias.
   * `private`: Los atributos y métodos privados serán visibles 
   * solo en su clase.
   * `protected`: Un atributo o método protegido será visible por 
   * todas las clases que la extiendan a demás de si misma.
   */
  class Coche
  {
    public $marca;
    protected $velocidad_maxima;
    private $seguridad_ncap;
    function __construct($marca, $velocidad_maxima, $seguridad_ncap)
    {
      $this->marca = $marca;
      $this->velocidad_maxima = $velocidad_maxima;
    }
  }
  $auto = new Coche("frenault", 90, 2);
  var_dump($auto->marca);
  /* frenault */
  // var_dump($auto->velocidad_maxima);
  /* error */
  // var_dump($auto->seguridad_ncap);
  /* error */


  // otro ejemplo
  class Fruit {
    public $name;
    protected $color;
    private $weight;
    function set_name($n) {  // a public function (default)
      $this->name = $n;
    }
    protected function set_color($n) { // a protected function
      $this->color = $n;
    }
    private function set_weight($n) { // a private function
      $this->weight = $n;
    }
  }
  
  $mango = new Fruit();
  $mango->name = 'Mango'; // OK
  // $mango->color = 'Yellow'; // ERROR
  // $mango->weight = '300'; // ERROR
  $mango->set_name('Mango'); // OK
  // $mango->set_color('Yellow'); // ERROR
  // $mango->set_weight('300'); // ERROR
  var_dump($mango);
  ?>
</body>

</html>