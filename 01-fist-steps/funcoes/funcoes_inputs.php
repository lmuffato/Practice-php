<?php

/* CARACTERISTICAS DAS FUNÇÕES

Toda a função deve ter um retorno.
Se não tiver um retorno, é uma subrotina.

*/

/* VALOR PADRÃO */
// Caso não seja passado um parâmetro pra função, ela usa o valor padrão.
/* Para passar mais parâmetros, basta separar por vírgulas:
function($name = "lucas", $age = 30)
*/
function print_name($name = "lucas") {
  return "Ola $name";
}

print(print_name()."\n"); // Retorna lucas
print(print_name('Tiago')."\n"); // Retorna Tiago

/* ACESSANDO TODOS OS INPUTS DA FUNÇÃO */
function data_today($day, $month, $year) {
  $argumentos = func_get_args();
  return $argumentos;
}

var_dump(data_today('30', '12', '2021' ));

/* INPUT DE VARIÁVEL */
$a = 10;
function troca_valor($a) {
  $a += 50;
  return $a;
}

print(troca_valor($a)."\n"); // 60
print($a."\n"); // 10
// A variável $a da função diferente da variável $a do escopo global

/* PASSAGEM PARÂMETRO POR REFERÊNCIA */
$b = 10;

function troca_valor2(&$b) {
/* o "&" antes da variável, indica que a vaiável está sendo passada por referência
permitindo que a função modifique a variável dentro de seu próprio escopo. */
  $b += 40;
  return $b;
}

print(troca_valor2($b)."\n"); // 60
print($b); // 10
// A variável $a da função diferente da variável $a do escopo global


?>