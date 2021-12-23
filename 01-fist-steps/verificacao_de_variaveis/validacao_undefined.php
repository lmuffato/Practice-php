<?php

// Declarando a variável 01
$variavel_excluida = 'Meu texto 1';
$variavel_vazia = '';
$variavel_indefinida = NULL;

// Excluindo a variável
unset($variavel_excluida);

if ($variavel_excluida === NULL) {
  print('A variável foi apagada - (NULL)'."\n");
}

if ($variavel_vazia === '') {
  print('A variável é vazia.'."\n");
}

if ($variavel_indefinida === NULL) {
  print('A variável não existe - (NULL)'."\n");
}

if (!$variavel_indefinida) {
  print('A variável não existe - (NULL)'."\n");
}


?>