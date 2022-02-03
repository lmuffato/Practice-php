<?php

/* TRATAMENTO DE ERROS

Transmitindo o erro para funções superiores

*/

function verifica($valor) {
  if ($valor === 1) {
    throw new Exception("O Valor não pode ser igual a 1"); // Lança um erro se o valor for igual a 1
  }
}

/* A função verifica invoca um erro, porém o tratamento é feito
na função superior. */
function tratamentoDeError() {
  try {
    verifica(1);
  }
  catch (Exception $error) {
    echo 'A exceção aqui é: ',  $error->getMessage(), "\n";
  }
}

tratamentoDeError();

?>