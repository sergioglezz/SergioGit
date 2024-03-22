<!DOCTYPE html>
<html>

<body>

    <?php
        //Esto es una línea comentada	echo "La línea anterior no se ejecuta";
        # This is also a single-line comment
    ?>
    <?
        /* Esto es una línea comentada
        esta línea también se comenta */
        echo "Las dos líneas anteriores no aparecen";
        //esta tampoco aparece	echo "comentar el código es importante"; #echo simple
    ?>
    <?
        // You can also use comments to leave out parts of a code line
        $x = 5 /* + 15 */ + 5;
        echo $x;
    ?>
</body>

</html>