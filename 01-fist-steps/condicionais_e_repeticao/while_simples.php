<?php

$condicao = true;

print("\n");

while ($condicao) {
  $numero = rand(1, 6); // gera numeros aleatórios de 1 a 10.
  print($numero."\n");
  if ($numero === 3) {
    print("Três!!!"."\n");
    $condicao = false;
  }
}

?>