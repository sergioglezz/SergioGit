<!DOCTYPE html>
<html>

<body>

    <h1>operador de asignación</h1>
    
    <?php  
        /* asignar
         */
        $a = 3;
        $b = $a;
        echo $a." - ".$b."<br>";
        //Ahora la variable $b vale 3

        /* modificar valor y asignar
         */
        $b = 6;
        $b += 3; // b = b + 3
        //Ahora la variable $b vale 9
        echo $b."<br>";
        $b -= 3; // b = b - 3
        //Ahora la variable $b vale 6
        echo $b."<br>";
        $b *= 3; // b = b * 3
        //Ahora la variable $b vale 18
        echo $b."<br>";
        $b /= 3; // b = b / 3
        //Ahora la variable $b vale 6
        echo $b."<br>";
        $b %= 3; // b = b % 3
        //Ahora la variable $b vale 0

        /* concatenar
        */ 
        $a = "Hola ";
        $b = $a;
        $b .= "Mundo";
        echo $a." - ".$b."<br>";
        //Ahora la variable $b vale "Hola Mundo"

        /* referencia
        */ 
        $a = 6;
        $b = &$a;
        //Ahora la variable $b vale 6 $a = 12;
        //Ahora la variable $b vale 12
        echo "${a} + ${b} + (6+1) = ". ($a + $b + $a + 1)."<br>";
        $c = $a++;
        echo "${a} + ${b} + ${c} = ". ($a + $b + $c); 
    ?>

</body>

</html>