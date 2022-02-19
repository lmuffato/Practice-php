<?php

# coalesce operator ??

$valor1 = 'string';
$valor2 = '';

function teste1() {
  # Se o valor não existir, retorna o que tiver na frente
  $valorTeste = $valor3 ?? 'nada';
  print($valorTeste);
}

teste1()

?>
