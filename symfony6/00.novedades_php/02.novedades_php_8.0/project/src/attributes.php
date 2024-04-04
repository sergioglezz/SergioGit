<!DOCTYPE html>
<html>

<body>

  <?php

  include 'intro.php'; ?>

  <h2>2. Attributes</h2>
  <p>Los atributos o anotaciones nos permiten añadir meta datos a nuestras clases, algo que seguramente os resulte familiar si trabajáis con frameworks como Symfony o Laravel.</p>
  <p>Según lo propuesto en la RFC, a partir de PHP 8 podremos especificar atributos / anotaciones sin tener que recurrir a bloques de comentarios.
    Para ello, lo primero que haremos será crear un atributo como si de una clase se tratase y empleando el atributo <code>&lt;&lt;PhpAttribute&gt;&gt;</code> para que pueda ser identificado como tal.</p>
  <pre>
  // A continuación se muestra un atributo personalizado
  #[\Attribute]
  class TestAttribute
  {
    public function __construct(public string $testArgument)
    {
    }
  }

  // Aplicar el atributo personalizado a la clase
  #[TestAttribute('Hello World')]
  class MyClass
  {
  }

  // Obtenga los metadatos de la clase utilizando Reflection
  $reflection = new \ReflectionClass(MyClass::class);
  $classAttributes = $reflection->getAttributes();

  var_dump($classAttributes[0]->newInstance()->testArgument);
  </pre>
  <?php
  // A continuación se muestra un atributo personalizado
  #[\Attribute]
  class TestAttribute
  {
    public function __construct(public string $testArgument)
    {
    }
  }

  // Aplicar el atributo personalizado a la clase
  #[TestAttribute('Hello World')]
  class MyClass
  {
  }

  // Obtenga los metadatos de la clase utilizando Reflection
  $reflection = new \ReflectionClass(MyClass::class);
  $classAttributes = $reflection->getAttributes();

  var_dump($classAttributes[0]->newInstance()->testArgument);
  ?>
</body>

</html>