<?php

function printn($value) {
  print($value."\n");
}

$valor1 = 50;
$valor2 = 40;
$valor3 = 50;

// OPERADORES BÁSICOS
var_dump($valor1 > $valor2); // true
var_dump($valor1 < $valor2); // false
var_dump($valor1 === $valor2); // false

// OPERADOR "SPACE SHIPPING"

/*
$valor1 <=> $valor2;

Se $valor1 > $valor2, retorna 1;
Se $valor1 < $valor2, retorna -1;
Se $valor1 === $valor2, retorna 0;

*/
printn($valor1 <=> $valor2); // 1

printn($valor2 <=> $valor1); // -1

printn($valor1 <=> $valor3); // 0

?>