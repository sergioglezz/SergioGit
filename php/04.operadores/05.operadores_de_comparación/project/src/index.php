<!DOCTYPE html>
<html>

<body>

    <h1>operador de comparación</h1>

    <?php
    /* Igual
     */
    $x = 100;
    $y = "100";
    var_dump($x == $y); // returns true because values are equal
    echo "<br>";
    /* Idéntico
     */
    $x = 100;
    $y = "100";
    var_dump($x === $y); // returns false because types are not equal
    echo "<br>";
    /* Diferente
     */
    $x = 100;
    $y = "100";
    var_dump($x != $y); // returns false because values are equal
    echo "<br>";

    $x = 100;
    $y = "100";
    var_dump($x <> $y); // returns false because values are equal
    echo "<br>";

    /* No Idéntico
     */
    $x = 100;
    $y = "100";
    var_dump($x !== $y); // returns true because types are not equal
    echo "<br>";

    /* Menor que
     */
    $x = 10;
    $y = 50;
    var_dump($x < $y); // returns true because $x is less than $y
    echo "<br>";

    /* Mayor que
     */
    $x = 100;
    $y = 50;
    var_dump($x > $y); // returns true because $x is greater than $y
    echo "<br>";

    /* Menor o igual que
     */
    $x = 50;
    $y = 50;
    var_dump($x <= $y); // returns true because $x is less than or equal to $y
    echo "<br>";

    /* Mayor o igual que
     */
    $x = 50;
    $y = 50;
    var_dump($x >= $y); // returns true because $x is greater than or equal to $y
    echo "<br>";

    /* Nave espacial
     */
    $x = 5;
    $y = 10;
    echo ($x <=> $y); // returns -1 because $x is less than $y
    echo "<br>";
    $x = 10;
    $y = 10;
    echo ($x <=> $y); // returns 0 because values are equal
    echo "<br>";
    $x = 15;
    $y = 10;
    echo ($x <=> $y); // returns +1 because $x is greater than $y
    echo "<br>";

    /* fusión de null
     */
    //estas tres expresiones son equivalentes
    $var = isset($_GET['foo']) ? $_GET['foo'] : "valor_por_defecto";
    echo ($var);
    $var = $_GET['foo'] ?: "valor_por_defecto";
    echo ($var);
    $var = $_GET['foo'] ?? "valor_por_defecto";
    echo ($var);
    echo "<br>";
    ?>

</body>

</html>