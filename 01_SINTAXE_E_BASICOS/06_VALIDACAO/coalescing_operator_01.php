<?php

/* TIPOS DE DADOS FALSOS */
$nulo = null;
$string_vazia = '';
$falso = false;

// objeto para tentar acessar chaves que não existem
$obj = [];

/* COALESCING OPERATOR */

// Funciona apenas para "NULL" e "propriedades inexistentes" de um objeto.
// Não funciona para false, '', e variáveis inexistentes.

print("\n");
print($nulo ?? 'null: Capturado pelo coalescing.'."\n");
print($string_vazia ?? 'string vazia: Capturado pelo coalescing.'."\n");
print($falso ?? 'false: Capturado pelo coalescing.'."\n");
print($inexistente ?? 'inexistente: Capturado pelo coalescing.'."\n");
print($obj['nome'] ?? 'propriedade inexistente: Capturado pelo coalescing.'."\n");

?>
