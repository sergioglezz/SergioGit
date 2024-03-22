<!DOCTYPE html>
<html>

<body>

    <h1>operadores</h1>
    
    <?php  
        // if empty($user) = TRUE, set $status = "anonymous"
        echo $status = (empty($user)) ? "anonymous" : "logged in";
        echo("<br>");

        $user = "John Doe";
        // if empty($user) = FALSE, set $status = "logged in"
        echo $status = (empty($user)) ? "anonymous" : "logged in";
        // diferente precedencia
        $a = 2 + 3 * 8;
        $b = (2 + 3) * 8;
        $c = 2 + (3 * 8);
        echo "${a} - ${b} - ${c}<br>";
        // igual precedencia
        $a = 2;
        $b = 3;
        $c = 8;
        echo $a - $b - $c;
        echo"<br>";
        echo ($a - $b) - $c; 
        echo"<br>";
        echo $a - ($b - $c); 
        echo"<br>";
        // signo igual
        $c = 8;
        $a = $b = $c;
        echo "${a} - ${b} - ${c}";
    ?>

</body>

</html>