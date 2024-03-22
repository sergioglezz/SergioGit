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

  //
  class Fruit
  {
    public $name;
    public $color;

    function __construct($name, $color)
    {
      $this->name = $name;
      $this->color = $color;
    }
    function get_name()
    {
      return $this->name;
    }
    function get_color()
    {
      return $this->color;
    }
  }

  $apple = new Fruit("Apple", "red");
  echo $apple->get_name();
  echo "<br>";
  echo $apple->get_color();
  ?>
</body>

</html>