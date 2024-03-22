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

  class Fruit
  {
    public $name;
    public $color;

    function __construct($name, $color)
    {
      $this->name = $name;
      $this->color = $color;
    }
    function __destruct()
    {
      echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
  }

  $apple = new Fruit("Apple", "red");
  ?>
</body>

</html>