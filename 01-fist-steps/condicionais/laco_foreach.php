<?php

$meses = [
  "Janeiro", "Fevereiro", "Março", "Abril",
  "maio", "Junho", "Julho", "Agosto",
  "Setembro", "Outubro", "Novembro", "Dezembro",
];

/* FOREACH SIMPLES */
foreach ($meses as $mes) {
  print("$mes/2021"."\n");
}

print("\n");

/* FOREACH COM INDICE */
foreach ($meses as $index => $mes) {
  print("Indice: {$index}"."\n");
  print("Mês: {$mes}/2021"."\n");
}

?>