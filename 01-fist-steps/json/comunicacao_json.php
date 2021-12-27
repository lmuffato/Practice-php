<?php

$pessoas = array();

array_push($pessoas,
  ['nome' => 'João', 'idade' => 20]
);

array_push($pessoas,
  ['nome' => 'José', 'idade' => 25]
);

/* CONVERTENDO ARRAYS PHP EM JSON */

// A opção "JSON_UNESCAPED_UNICODE" converte automaticamente para UTF-8.
$pessoas_json = json_encode($pessoas, JSON_UNESCAPED_UNICODE);
print_r($pessoas_json); // [{"nome":"João","idade":20},{"nome":"José","idade":25}]

/* CONVERTENDO JSON EM PHP ARRAYS */
$json01 = '[{"nome":"João","idade":20},{"nome":"José","idade":25}]';
$new_array01 = json_decode($json01, true); // Sem o true, a função converte os arrays em objeto de classe.
// print_r($new_array01);

?>