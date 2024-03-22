<!DOCTYPE html>
<html>

<body>

    <?php
        /* Normalmente, _cuando una función se completa/ejecuta, 
         * todas sus variables se borran. Sin embargo, a veces 
         * queremos que una variable local **NO se borre**_. 
         * La necesitamos para una función posterior.
         **/
        function myTest() {
          static $x = 0;
          echo $x;
          $x++;
        }
        
        myTest();
        myTest();
        myTest();
    ?>
    <br>
    <a href="./">volver al index </a>
</body>

</html>