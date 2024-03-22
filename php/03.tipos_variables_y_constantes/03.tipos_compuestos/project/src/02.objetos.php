<!DOCTYPE html>
<html>

<head>
    <title>Ejemplo</title>
</head>

<body>

    <?php
    class coche
    {
        function contamina()
        {
            echo "Arranco y contamino";
        }
    }

    $automovil = new coche;

    $automovil->contamina();
    ?>
    <br>
    <a href="./">volver al index </a>
</body>

</html>