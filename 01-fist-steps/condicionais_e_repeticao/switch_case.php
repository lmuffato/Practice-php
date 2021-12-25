<?php

/* if ou swith case?
  if:
1. Quando você vai definir as condições;

switch case:

1. Ja se é e conhecida as condiçẽos e respsotas.

*/

$dia01 = 1;

$dia_da_semana = date("w");
// A função date("w") retorna o número de 0 a 6, de acordo com o dia da semana.

print(date("w")."\n");

switch ($dia_da_semana) {
  case 0:
  print("Domingo");
  break;

  case 1:
  print("Segunda");
  break;

  case 2:
  print("Terça");
  break;

  case 3:
  print("Quarta");
  break;

  case 4:
  print("Quinta");
  break;

  case 5:
  print("Sexta");
  break;

  case 6:
  print("Sábado");
  break;

}



?>