<?php

$nota01 = 3;
$nota02 = 7;
$nota03 = 9;

/* CONDICIONAL SIMPLES */
if ($nota01 >= 7) { print("Aprovado"."\n"); } else { print("Reprovado"."\n"); }
if ($nota02 >= 7) { print("Aprovado"."\n"); } else { print("Reprovado"."\n"); }
if ($nota03 >= 7) { print("Aprovado"."\n"); } else { print("Reprovado"."\n"); }

/* CONDICIONAI COM MAIS CONDIÇÕES */
$idade01 = 10;
$idade02 = 17;
$idade03 = 25;
$idade04 = 40;
$idade05 = 65;

function fase_da_vida($idade) {
  if ($idade >= 60) {           // A primeira regra é feita utilizando if
      print("Idoso"."\n");
  } else if ($idade >= 30) {    // As demais regras utilizam else if
      print("Adulto"."\n");
  } else if ($idade >= 18) {
      print("Jovem"."\n");
  } else if ($idade >= 12) {
      print("Adolescente"."\n");
  } else {                      // A exceção final deve ser tratada com else
      print("criança"."\n");
  }
}

fase_da_vida($idade01);
fase_da_vida($idade02);
fase_da_vida($idade03);
fase_da_vida($idade04);
fase_da_vida($idade05);

?>
