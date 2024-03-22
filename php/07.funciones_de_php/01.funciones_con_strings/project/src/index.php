<!DOCTYPE html>
<html>

<body>

  <h1>funciones con strings</h1>

  <?php
  $text = "Hello world!";
  echo $text;
  // Devuelve la longitud de una cadena
  echo strlen($text); // outputs 12
  // Contar palabras en una cadena
  echo str_word_count($text); // outputs 2
  // Invertir una cadena
  echo strrev($text); // outputs !dlrow olleH
  // Buscar un texto dentro de una cadena
  echo strpos($text, "world"); // outputs 6
  // Reemplazar texto dentro de una cadena
  echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
  ?>
</body>

</html>