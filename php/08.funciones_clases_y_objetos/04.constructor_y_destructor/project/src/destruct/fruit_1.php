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

    function __construct($name)
    {
      $this->name = $name;
    }
    function __destruct()
    {
      echo "The fruit is {$this->name}.";
    }
  }

  $apple = new Fruit("Apple");

  ?>
</body>

</html>