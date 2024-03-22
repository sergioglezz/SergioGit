## PHP

##### Q1. ¿Qué devuelve este código?

`echo 76 <=> '76 trombones';`

- [ ] `1`
- [x] `-1`
- [ ] `a parser error`
- [ ] `0`

##### Q2. ¿Cuál es la forma más segura de evitar el almacenamiento de una contraseña en texto claro en la base de datos?

- [ ] `$encrypted = shal($password);`
- [ ] `$encrypted = crypt($password, \$salt);`
- [ ] `$encrypted = md5($password);`
- [x] `$encrypted = password_hash($password, PASSWORD_DEFAULT);`

##### Q3. ¿Qué hace este script?

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

##### Q4. En el siguiente script, ¿qué línea(s) causará(n) un error?

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

##### Q5. En una sentencia condicional, se quiere ejecutar el código sólo si ambos valores son verdaderos. ¿Qué operador de comparación debe utilizar?

- [ ] `||`
- [ ] `&`
- [ ] `<=>`
- [x] `&&`

##### Q6. ¿Con qué símbolo empiezan todas las variables en PHP?

- [ ] `&`
- [ ] `%`
- [ ] `\_`
- [x] `$`

##### Q7. ¿Cuál es la diferencia clave entre `GET` y `POST`?

- [ ] `GET` se utiliza con el protocolo HTTP. `POST` se utiliza con HTTPS.
- [x] `GET` muestra los datos enviados como parte de la URL. Durante `POST`, esta información no se muestra, ya que está codificada en el cuerpo de la solicitud.
- [ ] `GET` está pensado para cambiar el estado del servidor y lleva más datos que `POST`.
- [ ] `GET` es más seguro que `POST` y debe utilizarse para información sensible.

##### Q8. Sustituye los dos parámetros en la siguiente afirmación:

> _El operador `**` es útil para las operaciones de ordenación. Compara dos valores y devuelve un entero menor, igual o mayor que `0` dependiendo de si el valor del `**` es menor, igual o mayor que el otro._

- [ ] `greater-than; right`
- [x] `spaceship; left`
- [ ] `equality; right`
- [ ] `comparison; left`

##### Q9. ¿Cuáles son las palabras clave válidas para el manejo de errores en PHP?

- [ ] `try`, `throw`, `catch`, `callable`
- [ ] `try`, `yield`, `catch`, `finally`
- [ ] `yield`, `throw`, `catch`, `finally`
- [x] `try`, `throw`, `catch`, `finally`

##### Q10. ¿Qué valor equivale a verdadero?

- [ ] `0`
- [ ] `NULL`
- [ ] `''`
- [x] `-1`

##### Q11. ¿Qué falta en este código, que se supone que crea una _cookie_ de prueba?

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

##### Q12. ¿Cuál es el valor de `$total` en este cálculo?

```php
$total = 2 + 5 * 20 - 6 / 3
```

- [ ] 44
- [ ] 138
- [ ] 126
- [x] 100

##### Q13. ¿Para qué sirve añadir una "u" minúscula como modificador después del delimitador final en una expresión regular compatible con Perl?

- [ ] Hace que el metacarácter punto coincida con cualquier cosa, incluidos los carácteres de nueva línea.
- [ ] Hace que el patrón coincida con letras mayúsculas.
- [x] Tanto el patrón como la cadena a evaluar se tratan como UTF-8.
- [ ] Invierte la codicia de los cuantificadores en el patrón para que no sean codiciosos por defecto.

##### Q14. ¿Qué fragmento de código utiliza la sintaxis correcta para crear una instancia de la clase `Pet`?

- [ ] `$dog = new Pet;`
- [x] todas estas respuestas
- [ ] `$horse = (new Pet);`
- [ ] `$cat = new Pet();`

##### Q15. ¿Cuál es la mejor manera de explicar lo que hace este script?

```php
1 if (!$_SESSION['myusername'])
2 {
3   header('locaton: /login.php');
4   exit;
5 }
```

- [ ] Este script agota la sesión de `myusername`.
- [ ] Las cookies comienzan a ser almacenadas como resultado de este script.
- [ ] Este script valida el `username` y `password`.
- [x] Este script está en una página que requiere que el usuario esté conectado. Comprueba si el usuario tiene una sesión válida.

##### Q16. ¿Cuál es el formato correcto para añadir un comentario a un script PHP?

- [x] todas estas respuestas
- [ ] `#Este es un comentario`
- [ ] `/_ Este es un comentario _/`
- [ ] `// Este es un comentario`

##### Q17. PHP soporta múltiples tipos de bucles. Si quieres hacer un bucle a través de un bloque de código si y mientras una condición especificada sea verdadera, ¿qué tipo de bucle utilizarías?

- [ ] `for`
- [ ] `do-while`
- [x] `while`
- [ ] `foreach`

##### Q18. La función `ignore_user_abort( )` establece si una desconexión del cliente debe abortar la ejecución de un script. En qué escenario utilizaría usted, como desarrollador web, esta función?

- [ ] La utilizaría para evitar que un usuario haga clic en el botón de retroceso si decide no ver como resultado de un clic.
- [x] Usted usaría esta función si tiene algún proceso importante que hacer y no quiere detenerlo, incluso si sus usuarios hacen clic en Cancelar.
- [ ] Utilizaría esta función si quisiera abortar el script para todos los usuarios conectados, no sólo para el que se desconectó.
- [ ] Usted usaría esta función si quiere que un script PHP se ejecute para siempre.

##### Q19. La función de PHP `array_reduce()` toma una función de devolución de llamada que acepta un valor llevado a cabo en cada iteración y el elemento actual en el array, y reduce un array a un solo valor. ¿Qué ejemplo de código sumará y dará salida a los valores del array proporcionado?

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

##### Q20. ¿Qué script PHP utiliza un constructor para mostrar la cadena "¡El invierno está a punto de terminar!"?

- [x]
  ```php
  1 class MyClass {
  2 public function _construct()
  3 {
  4 echo 'Winter is almost over!'."\n";
  5 }
  6 }
  7 \$userclass = new MyClass;
  ```
- [ ]
  ```php
  1 class MyClass {
  2 public function _construct()
  3 {
  4 echo 'Winter is almost over!.."\n";
  5 }
  6 }
  7 $userclass = new MyClass;
  ```
- [ ]
  ```php
  1 class MyClass {
  2 public function _construct()
  3 {
  4 echo 'Winter is almost over!.."\n";
  5 }
  6 }
  7 \$userclass = new MyClass;
  ```
- [ ]
  ```php
  1 class MyClass {
  2 public function _construct()
  3 {
  4 echo 'Winter is almost over!'."n";
  5 }
  6 }
  7 $userclass = MyClass;
  ```

##### Q21. ¿Cómo podría solucionar un error de "_call to undefined function_"?

- [ ] Asegúrese de que ha importado el archivo que contiene la función.
- [ ] Asegúrese de que ha escrito correctamente el nombre de la función.
- [x] todas estas respuestas
- [ ] Asegúrese de que la declaración de la función está en un punto anterior del código que la llamada a la función.

##### Q22. ¿Qué línea NO podrías utilizar para comentar "El espacio: la última frontera"?

- [ ] `/* El espacio: la última frontera */`
- [x] `*/ El espacio: la última frontera /*`
- [ ] `#El espacio: la última frontera`
- [ ] `// El espacio: la última frontera`

##### Q23. ¿Qué se muestra en un navegador cuando se escribe el siguiente código? `<?php echo "¿Cuánto cuestan los plátanos?"?>`

- [ ] El navegador no mostraría nada debido a un error de sintaxis.
- [ ] El navegador mostraría un error, ya que no hay paréntesis alrededor de la cadena.
- [x] El navegador mostraría `¿Cuánto cuestan los plátanos?`.
- [ ] El navegador mostraría un error, ya que no hay punto y coma al final del comando echo.

##### Q24. ¿Qué operador utilizarías para encontrar el resto después de la división?

- [ ] /
- [x] %
- [ ] //
- [ ] DIV

##### Q25. ¿Cuál es el significado de los tres puntos en esta firma de función?

```php
function process(...$vals) {
        // do some processing
 }
```

- [ ] Hace que la función sea variable, permitiéndole aceptar como argumento un array que contenga un número arbitrario de valores.
- [x] Hace que la función sea variable, permitiéndole aceptar un número arbitrario de argumentos que se convierten en un array dentro de la función.
- [ ] Desactiva temporalmente la función mientras se depuran otras partes del script.
- [ ] Es un marcador de posición como un recordatorio TO DO que activa automáticamente un aviso cuando se ejecuta un script antes de completar la definición de la función.

##### Q26. Asumiendo que la clase `Horse` existe, ¿cuál es un ejemplo válido de herencia en PHP?

- [x] `class Pegasus extends Horse {}`
- [ ] `class Alicorn imports Pegasus, Unicorn {}`
- [ ] `class Unicorn implements Horse {}`
- [ ] `class Horse inherits Unicorn {}`

##### Q27. Sustituye los dos parámetros `**` en la siguiente afirmación:

> _Tanto el triple `===` como el doble `==` pueden ser usados para variables `**` en php. Si quieres escuchar que la cadena "`33`" y el número `33` son iguales, usarías `**` . Si quieres comprobar si un array contiene un valor de cadena concreto en un índice determinado, utilizarías `**_

- [x] comparar; dobles; triples
- [ ] comparar; triples; dobles
- [ ] asignar; triples; dobles
- [ ] asignar; dobles; triples

##### Q28. Su página php se muestra inesperadamente como totalmente en blanco. Qué paso arrojará luz sobre el problema?

- [ ] Añade este código al principio de tu script: `ini_set('display_errors',1);`
- [ ] comprueba el error del servidor registrado
- [x] todas estas respuestas
- [ ] asegúrese de que no le falta ningún punto y coma

##### Q29. ¿Cuál es la forma de crear un conjunto de "estaciones"?

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

##### Q30. Sustituye los dos parámetros `**` en la siguiente afirmación:

> _Tanto `self` como `this` son palabras clave que pueden utilizarse para referirse a las variables miembro de una clase adjunta. La diferencia es que `$this->member` debe usarse para miembros `**` y `self::$member` debe usarse para miembros `**`._

- [ ] privado, público
- [ ] objeto,primitivo
- [x] no estático, estático
- [ ] concreto, abstracto

##### Q31. ¿Qué imprimirá este código?

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

##### Q32. Usted está utilizando el siguiente código para encontrar una `fav_band`, pero está devolviendo `false`. ¿Qué paso(s) resolvería(n) el problema?

```php
isset ($_GET['fav_band'])
```

- [ ] comprueba si `fav_band` está incluido en la cadena de consulta en la parte superior de tu navegador
- [x] todas las respuestas
- [ ] ver el origen del formulario y asegurarse de que hay un campo de entrada con el nombre `fav_band`
- [ ] imprimir todo lo que se ha transmitido en la petición: `print_r($_REQUEST);`

##### Q33. ¿Qué código utilizarías para imprimir todos los elementos de un array llamado `$cupcakes`?

- [x] todas las respuestas
- [ ] `print_r($cupcakes);`
- [ ] `var_dump($cupcakes);`
- [ ] `foreach($cupcakes as &$cupcake) echo $cupcake;`

##### Q34. ¿Cuál es la causa de "_Cannot modify header information - headers already sent_"?

- [ ] Está intentando modificar un valor privado
- [ ] Falta el punto y coma
- [ ] Se está utilizando una clave en un array que no existe
- [x] Se está enviando algo de html antes de un comando `header()` que se está utilizando para una redirección

##### Q35. Which php control structure is used inside a loop to skip the rest of the current loops code and go back to the start of the loop for the next iteration

- [ ] `else`
- [ ] `break`
- [ ] `return`
- [x] `continue`

##### Q36. The php not operator is !. Given the snippet, is there an out put and what is it?

- [ ] there is an output '2 is an even number
- [x] output '21 is an odd number'
- [ ] no output. Syntax error do to missing semicolon at the end
- [ ] no output due to % in \$num%2!=0

##### Q37. You want to list the modules available in your PHP installation. What command should you run?

- [ ] `php -h`
- [ ] `php info`
- [ ] `php -v`
- [x] `php -m`

##### Q38. For the HTML form below, what is the correct functioning script that checks the input "mail" to be sure it is filled before proceeding?

```php
if (!empty($_POST["mail"])) {
echo "Yes, mail is set";
} else {
echo "No, mail is not set";
} (correct)
```

##### Q39. What is the value of `$result` in this calculation?

`$result = 25 % 6;`

- [ ] 4.167
- [ ] 1.5
- [ ] 4
- [x] 1

##### Q40. What is the job of the controller as a component in MVC?

- [x] The controller handles data passed to it by the view, and also passes data to the view. It interprets data sent by the view and disperses that data to the approrpiate models awaiting results to pass back to the view.
- [ ] The controller is a mechanism that allows you to create reusable code in languages such as PHP, where multiple inheritance is not supported.
- [ ] The controller presents content through the user interface, after communicating directly with the database.
- [ ] The controller handles specific tasks related to a specific area of functionality, handles business logic related to the results, and communicates directly with the database.

##### Q41. Why does this code trigger an error?

`$string = 'Shylock in a Shakespeare's "Merchant of Venice" demands his pound of flesh.';`

- [ ] Strings should always be wrapped in double quotes; and double quotes inside a string should be escaped by backslashes.
- [ ] All single and double quotes inside a string need to be escaped by backslashes to prevent a parse error.
- [ ] The opening and closing single quotes should be replaced by double quotes; and the apostrophe should be escaped by a backslash.
- [x] The apostrophe needs to be escaped by a backslash to prevent it from being treated as the closing quote.

##### Q42. A PDO object called `$db` has been set up to use for database operations, including user authentication. All user-related properties are set. The script line `public function __construct(&$db)` shows a constructor that initializes all user-related properties to \_ if no user has logged in. These parameters will be properly set by the login functions when a user logs in.

- [x] NULL
- [ ] TRUE
- [ ] FALSE
- [ ] 0

##### Q43. Assuming that `$first_name` and `$family_name` are valid strings, which statement is invalid?

- [ ] `echo $first_name. ' '. $familiy_name;`
- [x] `print $first_name, ' ', $familiy_name;`
- [ ] `print $first_name. ' '. $familiy_name;`
- [ ] `echo $first_name, ' ', $familiy_name;`

##### Q44. Which code snippet demonstrates encapsulation?

- [ ]
  ```php
  class Cow extends Animal {
      private $milk;
  }
  ```
- [ ]
  ```php
  class Cow {
      public $milk;
  }
  $daisy = new Cow();
  $daisy->milk = "creamy";
  ```
- [ ]
  ```php
  class Cow {
      public $milk;
      function getMilk() {`
          return $this->milk;
      }
  }
  ```
- [x]
  ```php
  class Cow {
      private $milk;
      public function getMilk() {
          return $this->milk;
      }
  }
  ```

##### Q45. The following XML document is in books.xml. Which code will output "Historical"?

```xml
<books>
    <book>
        <title>A Tale of Two Cities</title>
        <author>Charles Dickens</author>
        <categories>
            <category>Classics</category>
            <category>Historical</category>
        </categories>
    </book>
    <book>
        <title>Then There Were None</title>
        <author>Agatha Christies</author>
        <categories>
            <category>Mystery</category>
        </categories>
    </book>
</books>
```

- [ ]

```php
          $books = simplexml_load_string('books.xml');
          echo $books->book[0]->categories->category[1];
```

- [x]

```php
          $books = simplexml_load_file('books.xml');
          echo $books->book[0]->categories->category[1];
```

- [ ]

```php
          $books = SimpleXMLElement('books.xml');
          echo $books->book[0]->categories->category[1];
```

- [ ]

```php
          $books = SimpleXML('books.xml');
          echo $books->book[0]->categories->category[1];
```

##### Q46. When it comes to the value of a variable, what is the difference between NULL and empty?

- [ ] NULL is a blank value; empty is the lack of a value.
- [ ] A NULL value has an allocated address in memory; empty does not.
- [ ] NULL referes to the lack of a value for an integer; empty refers to the lack of a value for a string.
- [x] NULL is the lack of a value; empty is a blank value.

##### Q47. What would be a good name for this function?

```php
function doStuff($haystack, $needle) {
      $length = strlen($needle)
      if (substr($haystack, 0, $length) == $needle)
        return true;
      else
        return false;
}
```

- [ ] `equals`
- [ ] `endsWith`
- [x] `startsWith`
- [ ] `contains`

##### Q48. If you want to pass a formfield to another page when a button is clicked, you should use the ** . If you want to store information across multiple pages, you should use the ** ?

- [ ] request; response
- [ ] response; request
- [ ] session; request
- [x] request; session

##### Q49. You are using the following code to decide if a button is clicked, but it is never returning true. Which step is most likely to shed light on the problem?

```php
isset($_POST['submit'])
```

- [x] Make sure the input field displaying the button is named 'submit'
- [ ] Make sure you are not missing any semicolons
- [ ] Print everything in the session `print_r($_SESSION);`
- [ ] Look in the query string at the top of your browser to see if submit is assigned a value

##### Q50. Why should you follow a PSR standard?

- [x] because coding standards often vary between developers and companies
- [ ] because coding standards are monitored for compliance across developers and companies
- [ ] because there are mandatory coding standards among developers and companies
- [ ] if using certain platforms, because the PSR's apply to those platforms only

##### Q51. What are getters and setters?

- [ ] Getters and setters ensure that if a data member is declared private, then it can be accessed only within the same function, not by an outside class
- [ ] Getters and setters are utility functions within PHP that allow loading from, and saving to, a database
- [ ] Getters and setters encapsulate the fields of a class by making them acccessible only through its private methods, and keep the values themselves public
- [x] Getters and setters are methods used to declare or obtain the values of variables, usually private ones

#### Q52. What are the recommended settings in the PHP configuration file, php.ini, for a testing environment?

- [ ]
  ```php
  report_errors = E_ALL
  display_errors = On
  ```
- [x]
  ```php
  error_reporting = E_ALL
  display_errors = On
  ```
- [ ]
  ```php
  error_reporting = E_ALL & ~E_NOTICE
  display_errors = Off
  ```
- [ ]
  ```php
  error_reporting = E_ALL & ~E_NOTICE
  display_errors = On
  ```

#### Q53. Which PHP variable name is invalid?

- [ ] `$Double`
- [ ] `$double`
- [ ] `$_2times`
- [x] `$2times`

#### Q54. Which command will extract the domain suffix ("com") from the string `$string = "https://cat-bounce.com";`?

- [ ] `sub($string, -3)`
- [x] `substr($string, -3)`
- [ ] `substr($string, 3)`
- [ ] `$string.substr(-3)`

#### Q55. Where is PHP code executed?

- [ ] in the client's browser
- [ ] in the virtual machine
- [ ] in the memory of the computer viewing the webpage
- [x] on a web server

#### Q56. Which is not a valid magic constant?

- [x] `__RESOURCE__`
- [ ] `__FUNCTION__`
- [ ] `__CLASS__`
- [ ] `__TRAIT__`

##### Q57. What below script will print?

```php
  if( 1 == true){
        echo "1";
  }

  if( 1 === true){
      echo "2";
  }

  if("php" == true){
      echo "3";
  }

  if("php" === false){
      echo "4";
  }
```

- [ ] 134
- [x] 13
- [ ] 1
- [ ] 123