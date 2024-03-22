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

    function __construct($name)
    {
      $this->name = $name;
    }
    function get_name()
    {
      return $this->name;
    }
  }
  $apple = new Fruit("Apple");
  echo $apple->get_name();
  ?>
</body>

</html>