<?php

$a = NULL;
$b = NULL;
$c = 10;

/* o perador ?? verifica se a variável é nula, e se for,
igora e passa para os próximos parâmetros. */
var_dump($a ?? $b ?? $c);

?>