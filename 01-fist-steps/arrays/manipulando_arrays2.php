<?php

$meuArray01 = ['A', 'B', 'C'];

/* INSERINDO NOVOS DADOS */
array_push($meuArray01, 'D');
print_r($meuArray01);

/* INSERINDO UM ARRAY DENTRO DE OUTRO ARRAY */
$meuArray02 = ['A', 'B', 'C'];
$meuArray03 = ['D', 'E', 'F'];
array_push($meuArray02, $meuArray03); // Resulta em [A, B, C, [D, E, F]]
print_r($meuArray02);

/* UNINDO ARRAYS EM UM NOVO ARRAY */
// Utilizando o spread operator
$meuArray04 = ['A', 'B', 'C'];
$meuArray05 = ['D', 'E', 'F'];
array_push($meuArray04, ...$meuArray05); // Resulta em [A, B, C, D, E, F]
print_r($meuArray04);



?>