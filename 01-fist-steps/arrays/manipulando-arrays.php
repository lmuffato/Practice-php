<?php

$meuArray01 = ['A', 'B', 'C'];

$novoArray = [1, 2, 3];

// Colocando arrays enfileirados
array_push($meuArray01, ...[1,2,3]); // resultado = [A, B, C, 1, 2, 3]

print_r($meuArray01);

// Colocando um array como uma posição de um objeto
array_push($meuArray01, [1,2,3]); // resultado = [A, B, C, [ 1, 2, 3] ]

print_r($meuArray01);

?>