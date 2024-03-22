## PHP

##### Q1. ¿Qué devuelve este código?

`echo 76 <=> '76 trombones';`

- [ ] `1`
- [x] `-1`
- [ ] `a parser error`
- [ ] `0`

##### Q2. ¿Qué hace este script?

```php
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
if ($email === false) {
    $emailErr = "Please re-enter valid email";
}
```

- [ ] Se asegura de que la dirección de correo electrónico es una dirección buena y que funciona
- [ ] Hace que un correo electrónico sea seguro para introducirlo en una base de datos
- Asigna un correo electrónico a una variable y luego elimina todos los caracteres ilegales de la variable \$email
- [x] Verifica que una dirección de correo electrónico esté bien formada.

##### Q3. En el siguiente script, ¿qué línea(s) causará(n) un error?

```
1 <?php
2   $count = 0;
3   $_xval = 5;
4   $_yval = 1.0;
5   $some_string = "Hello there!";
6   $some_string = "How are you?";
7   $will i work = 6;
8   $3blindmice = 3;
9 ?>
```

- [ ] La línea 6 causará un error porque no se puede reasignar un nuevo valor a una variable que ya ha sido establecida.
- [x] Las líneas 7 y 8 causarán un error. La línea 7 tiene espacios en blanco en $will i work y debería ser $will_i_work. La línea 8 no puede empezar con un número porque es una variable.
- [ ] La línea 5 causará un error porque some_string debería ser someString.
- [ ] Las líneas 3 y 4 causarán un error porque una variable no puede comenzar con un guión bajo (\_).

##### Q4. En una sentencia condicional, se quiere ejecutar el código sólo si ambos valores son verdaderos. ¿Qué operador de comparación debe utilizar?

- [ ] `||`
- [ ] `&`
- [ ] `<=>`
- [x] `&&`

##### Q5. ¿Con qué símbolo empiezan todas las variables en PHP?

- [ ] `&`
- [ ] `%`
- [ ] `\_`
- [x] `$`

##### Q6. ¿Cuál es la diferencia clave entre `GET` y `POST`?

- [ ] `GET` se utiliza con el protocolo HTTP. `POST` se utiliza con HTTPS.
- [x] `GET` muestra los datos enviados como parte de la URL. Durante `POST`, esta información no se muestra, ya que está codificada en el cuerpo de la solicitud.
- [ ] `GET` está pensado para cambiar el estado del servidor y lleva más datos que `POST`.
- [ ] `GET` es más seguro que `POST` y debe utilizarse para información sensible.

##### Q7. Sustituye los dos parámetros `**` en la siguiente afirmación:

> _El operador `**` es útil para las operaciones de ordenación. Compara dos valores y devuelve un entero menor, igual o mayor que `0` dependiendo de si el valor del `**` es menor, igual o mayor que el otro._

- [ ] `greater-than; right`
- [x] `spaceship; left`
- [ ] `equality; right`
- [ ] `comparison; left`

##### Q8. ¿Cuáles son las palabras clave válidas para el manejo de errores en PHP?

- [ ] `try`, `throw`, `catch`, `callable`
- [ ] `try`, `yield`, `catch`, `finally`
- [ ] `yield`, `throw`, `catch`, `finally`
- [x] `try`, `throw`, `catch`, `finally`

##### Q9. ¿Qué valor equivale a verdadero?

- [ ] `0`
- [ ] `NULL`
- [ ] `''`
- [x] `-1`

##### Q10. ¿Qué falta en este código, que se supone que crea una _cookie_ de prueba?

```php
1 $string_name = "testcookie";
2 $string_value = "This is a test cookie";
3 $expiry_info = info()+259200;
4 $string_domain = "localhost.localdomain";
```

- [ ] Falta la matriz `$_REQUEST`.
- [ ] Falta el array `$_COOKIES`.
- [ ] Falta la sesión de cookies.
- [x] Falta la llamada a `setcookie()`.

##### Q11. ¿Cuál es el valor de `$total` en este cálculo?

```php
$total = 2 + 5 * 20 - 6 / 3
```

- [ ] 44
- [ ] 138
- [ ] 126
- [x] 100

##### Q12. ¿Qué fragmento de código utiliza la sintaxis correcta para crear una instancia de la clase `Pet`?

- [ ] `$dog = new Pet;`
- [x] todas estas respuestas
- [ ] `$horse = (new Pet);`
- [ ] `$cat = new Pet();`

##### Q13. ¿Cuál es la mejor manera de explicar lo que hace este script?

```php
1 if (!$_SESSION['myusername'])
2 {
3   header('locaton: /login.php');
4   exit;
5 }
```

- [ ]Este script agota la sesión de `myusername`.
- [ ] Las cookies comienzan a ser almacenadas como resultado de este script.
- [ ] Este script valida el `username` y `password`.
- [x] Este script está en una página que requiere que el usuario esté conectado. Comprueba si el usuario tiene una sesión válida.

##### Q14. ¿Cuál es el formato correcto para añadir un comentario a un script PHP?

- [x] todas estas respuestas
- [ ] `#Este es un comentario`
- [ ] `/_ Este es un comentario _/`
- [ ] `// Este es un comentario`

##### Q15. PHP soporta múltiples tipos de bucles. Si quieres hacer un bucle a través de un bloque de código si y mientras una condición especificada sea verdadera, ¿qué tipo de bucle utilizarías?

- [ ] `for`
- [ ] `do-while`
- [x] `while`
- [ ] `foreach`

##### Q16. La función `ignore_user_abort( )` establece si una desconexión del cliente debe abortar la ejecución de un script. En qué escenario utilizaría usted, como desarrollador web, esta función?

- [ ] La utilizaría para evitar que un usuario haga clic en el botón de retroceso si decide no ver como resultado de un clic.
- [x] Usted usaría esta función si tiene algún proceso importante que hacer y no quiere detenerlo, incluso si sus usuarios hacen clic en Cancelar.
- [ ] Utilizaría esta función si quisiera abortar el script para todos los usuarios conectados, no sólo para el que se desconectó.
- [ ] Usted usaría esta función si quiere que un script PHP se ejecute para siempre.

##### Q17. La función de PHP `array_reduce()` toma una función de devolución de llamada que acepta un valor llevado a cabo en cada iteración y el elemento actual en el array, y reduce un array a un solo valor. ¿Qué ejemplo de código sumará y dará salida a los valores del array proporcionado?

- [ ]
  ```php
  1 <?php
  2 echo array_reduce([1, 2, 5, 10, 11], function ($item, $carry) {
  3     $carry = $carry + $item;
  4 });
  5?>
  ```
- [ ]
  ```php
  1 <?php
  2 echo array_reduce([1, 2, 5, 10, 11], function ($carry, $item) {
  3     return $carry = $item + $item;
  4 });
  5?>
  ```
- [ ]
  ```php
  1 <?php
  2 array_reduce([11 2, 5, 10, 11], function ($item, $carry) {
  3     echo $carry + $item;
  4 });
  5?>
  ```
- [x]
  ```php
  1 <?php
  2 echo array_reduce([1, 2, 5, 10, 11], function ($carry, $item) {
  3     return $carry += $item;
  4 });
  5?>
  ```

##### Q18. ¿Qué script PHP utiliza un constructor para mostrar la cadena "¡El invierno está a punto de terminar!"?

- [x]
  ```php
  1 class MyClass {
  2 public function _construct()
  3 {
  4 echo '¡El invierno está a punto de terminar!'."\n";
  5 }
  6 }
  7 \$userclass = new MyClass;
  ```
- [ ]
  ```php
  1 class MyClass {
  2 public function _construct()
  3 {
  4 echo '¡El invierno está a punto de terminar!.."\n";
  5 }
  6 }
  7 $userclass = new MyClass;
  ```
- [ ]
  ```php
  1 class MyClass {
  2 public function _construct()
  3 {
  4 echo '¡El invierno está a punto de terminar!.."\n";
  5 }
  6 }
  7 \$userclass = new MyClass;
  ```
- [ ]
  ```php
  1 class MyClass {
  2 public function _construct()
  3 {
  4 echo '¡El invierno está a punto de terminar!'."n";
  5 }
  6 }
  7 $userclass = MyClass;
  ```

##### Q19. ¿Cómo podría solucionar un error de "_call to undefined function_"?

- [ ] Asegúrese de que ha importado el archivo que contiene la función.
- [ ] Asegúrese de que ha escrito correctamente el nombre de la función.
- [x] todas estas respuestas
- [ ] Asegúrese de que la declaración de la función está en un punto anterior del código que la llamada a la función.

##### Q20. ¿Qué línea NO podrías utilizar para comentar "El espacio: la última frontera"?

- [ ] `/* El espacio: la última frontera */`
- [x] `*/ El espacio: la última frontera /*`
- [ ] `#El espacio: la última frontera`
- [ ] `// El espacio: la última frontera`

##### Q21. ¿Qué se muestra en un navegador cuando se escribe el siguiente código? `<?php echo "¿Cuánto cuestan los plátanos?"?>`

- [ ] El navegador no mostraría nada debido a un error de sintaxis.
- [ ] El navegador mostraría un error, ya que no hay paréntesis alrededor de la cadena.
- [x] El navegador mostraría `¿Cuánto cuestan los plátanos?`.
- [ ] El navegador mostraría un error, ya que no hay punto y coma al final del comando echo.

##### Q22. ¿Qué operador utilizarías para encontrar el resto después de la división?

- [ ] /
- [x] %
- [ ] //
- [ ] DIV

##### Q23. Asumiendo que la clase `Horse` existe, ¿cuál es un ejemplo válido de herencia en PHP?

- [x] `class Pegasus extends Horse {}`
- [ ] `class Alicorn imports Pegasus, Unicorn {}`
- [ ] `class Unicorn implements Horse {}`
- [ ] `class Horse inherits Unicorn {}`

##### Q24. Sustituye los dos parámetros `**` en la siguiente afirmación:

> _Tanto el triple `===` como el doble `==` pueden ser usados para variables `**` en php. Si quieres escuchar que la cadena "`33`" y el número `33` son iguales, usarías `**` . Si quieres comprobar si un array contiene un valor de cadena concreto en un índice determinado, utilizarías `**_

- [x] comparar; dobles; triples
- [ ] comparar; triples; dobles
- [ ] asignar; triples; dobles
- [ ] asignar; dobles; triples

##### Q25. ¿Cuál es la forma de crear un conjunto de "estaciones"?

- [ ]

```php
estaciones = array(
    1=>'primavera',
    2=>'verano',
    3=>'otoño',
    4=>'invierno',
);
```

- [ ] `$seasons = array(primavera,verano,otoño,invierno);`
- [ ] `$seasons = ('primavera','verano','otoño','invierno');`
- [x] `$seasons = ['primavera','verano','otoño','invierno'];`

##### Q26. Sustituye los dos parámetros `**` en la siguiente afirmación:

> _Tanto `self` como `this` son palabras clave que pueden utilizarse para referirse a las variables miembro de una clase adjunta. La diferencia es que `$this->member` debe usarse para miembros `**` y `self::$member` debe usarse para miembros `**`._

- [ ] privado, público
- [ ] objeto,primitivo
- [x] no estático, estático
- [ ] concreto, abstracto

##### Q27. ¿Qué imprimirá este código?

```php
$mathe=array('archi','euler','pythagoras');
array_push($mathe,'hypatia');
array_push($mathe,'fibonacci');
array_pop($mathe);
echo array_pop($mathe);
echo sizeof($mathe);
```

- [ ] euler3
- [ ] hypatia5
- [x] hypatia3
- [ ] fibonacci4

##### Q28. Usted está utilizando el siguiente código para encontrar una `fav_band`, pero está devolviendo `false`. ¿Qué paso(s) resolvería(n) el problema?

```php
isset ($_GET['fav_band'])
```

- [ ] comprueba si `fav_band` está incluido en la cadena de consulta en la parte superior de tu navegador
- [x] todas las respuestas
- [ ] ver el origen del formulario y asegurarse de que hay un campo de entrada con el nombre `fav_band`
- [ ] imprimir todo lo que se ha transmitido en la petición: `print_r($_REQUEST);`

##### Q29. ¿Qué código utilizarías para imprimir todos los elementos de un array llamado `$cupcakes`?

- [x] todas las respuestas
- [ ] `print_r($cupcakes);`
- [ ] `var_dump($cupcakes);`
- [ ] `foreach($cupcakes as &$cupcake) echo $cupcake;`

##### Q30. ¿Cuál es la causa de "_Cannot modify header information - headers already sent_"?

- [ ] Está intentando modificar un valor privado
- [ ] Falta el punto y coma
- [ ] Se está utilizando una clave en un array que no existe
- [x] Se está enviando algo de html antes de un comando `header()` que se está utilizando para una redirección