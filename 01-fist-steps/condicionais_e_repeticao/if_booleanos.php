<?php

/* O resultado falso de uma função, só pode ser visto utilizando var_dump
no caso de print ou print_r, o resultado retornado será um espaço em branco.
*/

function test01($number) {
  if ($number === 5) return true;
  return false;
}

var_dump(test01(5));

?>