<!DOCTYPE html>
<html>

<body>

  <?php
  include 'intro.php'; ?>
  <h2>6. Nuevas funciones con Strings</h2>
  <p><strong>PHP 8</strong> trae también una serie de nuevas funciones para simplificar la forma en que trabajamos con el tipo <code>string</code>.</p>
  <blockquote>
    <p>💞 _Seguramente la más interesante de ellas sea <code>str_contains</code>, la cual ¡por fin! nos soluciona tener que emplear la función strpos para comprobar si un <code>string</code> contiene a otro._</p>
  </blockquote>
  <p>Es decir, se acabó hacer esto 💪:</p>
  <pre>
  if (strpos('En un lugar de la Mancha de cuyo...', 'Mancha') != false) {
    /* ... */
    var_dump('como antes');
  }

  if (str_contains('En un lugar de la Mancha de cuyo...', 'Mancha')) {
    /* ... */
    var_dump('como ahora');
  }
  </pre>
  <?php
  if (strpos('En un lugar de la Mancha de cuyo...', 'Mancha') != false) {
    /* ... */
    var_dump('como antes');
  }

  if (str_contains('En un lugar de la Mancha de cuyo...', 'Mancha')) {
    /* ... */
    var_dump('como ahora');
  }
  ?>
  <pre>
  if(str_starts_with('En un lugar de la Mancha de cuyo...', 'En un lugar')) {
    /* ... */
  }
  if(str_ends_with('En un lugar de la Mancha de cuyo...', 'de cuyo')) {
    /* ... */
  }
  </pre>
  <?php
  if(str_starts_with('En un lugar de la Mancha de cuyo...', 'En un lugar')) {
    /* ... */
    var_dump('como ahora');
  }
  if(str_ends_with('En un lugar de la Mancha de cuyo...', 'de cuyo')) {
    /* ... */
    var_dump('como ahora');
  }
  ?>
</body>

</html>