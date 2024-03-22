<!DOCTYPE html>
<html>

<body>

    <h1>Tipos de datos</h1>
    
    <?php  
        $data = array(1, 1., NULL, new stdClass, 'foo');

        foreach ($data as $value) {
            var_dump($value);
            echo gettype($value), "<hr>";
        }
    ?>

</body>

</html>