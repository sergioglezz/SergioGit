<!DOCTYPE html>
<html>

<head>
    <title>Ejemplo</title>
</head>

<body>

    <?php  
        echo 'Puedo escribir una cadena corta';
        echo 'O una un poco más larga
          con saltos de linea';
        echo 'L\'Albufera es una meravella,
          pero me obliga a escapar la comillla';
        echo 'Y las variables $tampoco se $expandiran';
        echo "Con comillas dobles tengo más secuencias de escape \n \r \t \v \e \" \f";
        
        $a = 1.234;
        echo "esto es un float: $a <br>";
        
        $str = <<<EOD
          También puedo utilizar la sintaxis heredoc.
          EOD;
        echo $str;
    ?>
    <br>
    <a href="./">volver al index </a>
</body>

</html>