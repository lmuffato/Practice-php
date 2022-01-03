<?php

/* A função debug_backtrace() retorna um array com as informações como:
1. Caminho completo do arquivo em que a função está sendo executada.
2. Linha onde a função é chamada.
3. Nome da função.
4. Argumentos.


*/

function myCall () {
  $linha = debug_backtrace();
  // return $linha[0]["line"];
  return $linha;
}

var_dump(myCall());

?>