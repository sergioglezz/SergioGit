<!DOCTYPE html>
<html>

<head>
    <title>Ejemplo</title>
</head>

<body>

    <?php  
        //comparando floats
        $a = 1.23456789;
        $b = 1.23456780;
        $épsilon = 0.00001;
        if(abs($a-$b) < $épsilon) {
            echo "true";
        }

        $a = 1.234;
        var_dump($a); // float(1.234)
        $b = 1.2e3;
        var_dump($b); // float(1200)
        $c = 7E-10;
        var_dump($c); // float(7.0E-10)
        //desbordamiento en sistemas de 32 bits
        $numero_grande = 2147483647;
        var_dump($numero_grande); // int(2147483647)
        $numero_grande = 2147483648;
        var_dump($numero_grande); // float(2147483648)
        //desbordamiento en sistemas de 62 bits
        $numero_grande = 9223372036854775807;
        var_dump($numero_grande); // int(9223372036854775807)
        $numero_grande = 9223372036854775808;
        var_dump($numero_grande); // float(9.2233720368548E+18)
    ?>
    <br>
    <a href="./">volver al index </a>
</body>

</html>