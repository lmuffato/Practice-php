<?php

// ATRIBUIÇÃO DE STRING

$nome = 'Lucas';
print($nome."\n");

// O operador ".=" pega acresta uma string na string atual da variável.
$nome .= ' Muffato';
print($nome."\n");

// ATRIBUIÇÃO MATEMÁTICA
$valorTotal = 0;
$valorTotal += 100;
print($valorTotal."\n");  // 100

$desconto = 1;
$desconto *= 0.9;
print($desconto."\n");  // 0.9

$fracao = 1;
$fracao /= 10;
print($fracao."\n"); // 0.1

$subtrair = 10;
$subtrair -= 1;
print($subtrair."\n"); // 0.9

$acrescimo = 1;
$acrescimo ++; // 1 + 1
print($acrescimo."\n"); // 2

$decrescimo = 1;
$decrescimo --; // 1 - 1
print($decrescimo."\n"); // 0

?>