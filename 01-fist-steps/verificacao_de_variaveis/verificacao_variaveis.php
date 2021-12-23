<?php

// Declarando a variável 01
$variavel01 = 'Meu texto 1';

// Declarando a variável 02
$variavel02 = 'Meu texto 2';

// Excluindo a variável 01
unset($variavel01);
// print_r($variavel01); // Retorna undefined


if (isset($variavel01)) {
  print('A variável existe');
} else { print('A variável não existe'."\n"); }


if (!$variavel01) {
  print('A variável não existe - (Simplificado)'."\n");
}

?>