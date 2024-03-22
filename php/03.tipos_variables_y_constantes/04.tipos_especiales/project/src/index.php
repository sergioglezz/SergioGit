<!DOCTYPE html>
<html>

<body>

    <h1>Tipos especiales</h1>

    <?php  
        $file = fopen("test.txt", "r");

        //Output lines until EOF is reached
        while(! feof($file)) {
          $line = fgets($file);
          echo $line. "<br>";
        }
        
        fclose($file);
    ?>
    <br>
    <a href="./">volver al index </a>
</body>

</html>