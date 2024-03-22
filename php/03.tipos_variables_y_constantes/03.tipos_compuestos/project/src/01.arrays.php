<!DOCTYPE html>
<html>

<head>
    <title>Ejemplo</title>
</head>

<body>

    <?php
    $array1 = array("foo" => "bar", "bar" => "foo",);
    var_dump($array1);
    $array2 = [
        "foo" => "bar",
        "bar" => "foo",
    ];
    var_dump($array2);
    $array3 = array(
        "foo" => "bar",
        "bar" => "foo",
        100   => -100,
        -100  => 100,
    );
    var_dump($array3);
    $frutas = array(
        "frutas" => array(
            "a" => "naranja",
            "b" => "platano",
            "c" => "manzana"
        ),
        "numeros" => array(
            2,
            4,
            9
        )
    );
    var_dump($frutas);
    ?>
    <br>
    <a href="./">volver al index </a>
</body>

</html>