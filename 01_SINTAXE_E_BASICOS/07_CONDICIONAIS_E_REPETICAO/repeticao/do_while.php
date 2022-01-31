<?php

/* A diferença entre "do" e "do while", é que o while
verifica a condição antes de executar, enquanto que o do executa e depois verifica.

Como o "do" executa antes de verificar a condição, ele executa uma vez
mesmo que a condição seja falsa.
*/

$total = 1;

do {
  $total ++;
  print("$total"."\n");
} while ($total <= 10);

?>