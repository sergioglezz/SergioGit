<!DOCTYPE html>
<html>

<body>

    <h1>operador punto</h1>
    
    <?php  
        $texto1 = "Hola ";
        $texto2 = "Mundo!!";
        echo $texto1.$texto2;
        echo "<br>";
        //Muestra por pantalla Hola Mundo!
        $a = 30;
        $b = 50;
        echo $a.$b;
        //Muestra por pantalla 3050

        /* concatenación + asignación
         */
        $txt1 = "Hello";
        $txt2 = " world!";
        $txt1 .= $txt2;
        echo $txt1;
    ?>

</body>

</html>