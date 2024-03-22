<!DOCTYPE html>
<html>

<body>

    <h1>Variables y constantes</h1>

    <?php
    /* Variables
         */
    $mivariable;
    // echo $MIVariable;
    //  Warning: Undefined variable

    // asignar valor a una variable
    $miCadena = "Es mi primera variable";
    echo $miCadena . "<br>";

    // nombrando variables
    // $4var = "no valida";
    //Variable no válida. Empieza por número
    $_4var = "valida con subrayado"; //Válida, empieza con subrayado
    $sïmbolo = "caracter ASCII"; //Válida, ï es un caracter ASCII

    // obtener el tipo de una variable
    $miCadena = "Es mi primera variable";
    var_dump($miCadena);
    echo gettype($miCadena), "<hr>";

    /* Constantes
         */
    define("NOMBRE", "valor");
    const NOMBRE2 = "segundo valor";
    // 
    define("PRIMERACONSTANTE", "Esta es mi primera constante");
    var_dump(PRIMERACONSTANTE);

    define('ANIMALES', array(
        'perro',
        'gato',
        'pájaro'
    ));

    echo ANIMALES[1].'<br>'; // muestra "bici"
    const DBDATA = array(
      "user"=>"foobar", "password"=>"123456", "dbname"=>"xyz"
    );
    echo DBDATA['user'].'<br>'; //muestra foobar
    ?>

</body>

</html>