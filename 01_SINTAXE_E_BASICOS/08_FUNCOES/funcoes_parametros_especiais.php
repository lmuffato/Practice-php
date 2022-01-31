<?php

/* PARÂMETROS INDETERMINADOS COM VERIFICAÇÃO */
/* o int antes do parâmetro, coloca uma verificação na função.
Se o valor não for um interiro, retorna um erro. */
function soma01(int ...$valores) {
  return array_sum($valores);
}
var_dump(soma01(5,5,5));

/* CONTROLANDO A SAÍDA DA FUNÇÃO */
/* o int antes do parâmetro, coloca uma verificação na função.
Se o valor não for um interiro, retorna um erro. */
function soma02(int ...$valores):string {
  return array_sum($valores);     
}
var_dump(soma02(5,5,5));

function soma03(int ...$valores):string {
  return array_sum($valores);     
}
var_dump(soma03(5.5,5,5)); // ignora o 0.5 e soma extrai apenas os valores interios

?>