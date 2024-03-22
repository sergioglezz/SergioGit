<!DOCTYPE html>
<html>

<head>
    <title>Ejemplo</title>
</head>

<body>

    <?php  
        $numero = 22; // número decimal
        var_dump($numero);
        echo "valor: ". $numero;
        $numero = -22; // un número negativo
        var_dump($numero);
        echo "valor: ". $numero;
        $numero = 022; // número octal (equivale a 18 decimal)
        var_dump($numero);
        echo "valor: ". $numero;
        $numero = 0x1B; // número hexadecimal (equivale a 27 decimal)
        var_dump($numero);
        echo "valor: ". $numero;
        $numero = 0b10110; // número binario (equivale al 22 decimal)
        var_dump($numero);
        echo "valor: ". $numero;
    ?>
    <br>
    <a href="./">volver al index </a>
</body>

</html>