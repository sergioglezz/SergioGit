<!DOCTYPE html>
<html>

<body>

  <?php
  include 'intro.php'; ?>
  <h2>4. Mixed Types</h2>
  <p>Seguro que alguna vez habéis tratado de tipar un argumento o el valor de retorno de una función mediante <code>mixed</code> pensando que era un tipo válido y, sin embargo, habéis recibido un error al hacerlo. Por ejemplo:</p>
  <ul>
    <li>una función que devuelve <code>void</code> o <code>null</code>.</li>
    <li>un argumento que puede recibir valores de varios tipos.</li>
  </ul>
  <p>Con PHP 8 ya podremos tipar mediante <code>mixed</code> argumentos, propiedades y valores de retorno para representar varios de estos valores:</p>
  <ul>
    <li><code>array</code></li>
    <li><code>bool</code></li>
    <li><code>callable</code></li>
    <li><code>int</code></li>
    <li><code>float</code></li>
    <li><code>null</code></li>
    <li><code>object</code></li>
    <li><code>resource</code></li>
    <li><code>string</code></li>
  </ul>
  <p>Sí, como veis <code>mixed</code> también incluye <code>null</code> por lo que no será valido un <strong>tipado</strong> como el siguiente: <code>?mixed</code>.</p>
  <pre>
  function foo(mixed $foo): mixed
  {
    return $foo;
  }

  var_dump(foo(10));
  var_dump(foo('hello world'));
  </pre>
  <?php
  function foo(mixed $foo): mixed
  {
    return $foo;
  }

  var_dump(foo(10));
  var_dump(foo('hello world'));
  ?>
</body>

</html>