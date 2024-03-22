<!DOCTYPE html>
<html>

<body>

    <?php
        $x = 5; // global scope

        echo "<p>Variable x outside function is: $x</p>";
        
        function myTest() {
          // using x inside this function will generate an error
          echo "<p>Variable x inside function is: $x</p>";
        }
        
        myTest();
    ?>
    <br>
    <a href="./">volver al index </a>
</body>

</html>