<?php

while (true) {
  $numero = rand(1, 10);
  print("$numero"."\n");
  if ($numero === 3) {
    print("Terminou"."\n");
    break;
  }
}

?>
