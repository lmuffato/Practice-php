<?php

/* LAÇO FOR PURO */
for ($i = 0; $i <= 10; $i++) {
  print($i."\n");
}

print("\n");

/* LAÇO FOR COM CONDIÇÕES */
for ($i = 0; $i <= 50; $i++) {
  if ($i >= 30 && $i <= 40) {
    print($i."\n");
  }
}

print("\n");

/* LAÇO FOR COM CONDIÇÕES ESPECIAIS*/
for ($i = 0; $i <= 50; $i++) {
  if ($i >= 30 && $i <= 40) continue;   // "continue" vai pro pro próximo laço for.
  if ($i > 45) {
    print("final 45"."\n");
    break;                              // "break" encerra o laço for
  }
}

?>