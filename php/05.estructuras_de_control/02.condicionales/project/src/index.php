<!DOCTYPE html>
<html>

<body>

    <h1>condicionales</h1>

    <?php
    $a = 30;
    $b = 20;
    if ($a > $b) {
        //Mostrará el mensaje cuando A sea mayor que B
        echo "A es mayor que B";
    }
    /*
     **/
    $a = 30;
    $b = 20;
    if ($a > $b) {
        echo "A es mayor que B";
        $a = $b;
    }
    // Mostrará el mensaje cuando A sea mayor que B y se asignará el valor de $b en $a
    $a = 30;
$b = 40;
if ($a > $b){
  echo "A es mayor que B";
}else{
  echo "A no es mayor que B";
}
// Mostrará el primer mensaje si A es mayor que B. El segundo si pasa lo contrario 
$a = 40;
$b = 40;
if ($a > $b){
  echo "A es mayor que B";
}elseif ($a == $b){
  echo "A es igual a B";
}else{
  echo "A es menor que B";
}
//
$a = 40;
$b = 40;
if ($a > $b):
  echo "A es mayor que B";
elseif ($a == $b):
  echo "A es igual a B";
else:
  echo "A es menor que B";
endif;
    ?>

</body>

</html>