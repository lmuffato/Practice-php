<?php

/* CLASSE DATETIME */

$dt = new DateTime();
// "new" instancia uma nova classe

print($dt -> format("d/m/\y H:i:s")."\n");
// o "->" acessa um método

/* SOMANDO DATAS */
// $dt -> add(1);

print($dt -> format("d/m/\y H:i:s")."\n");

$periodo = new DateInterval("P15D"); // periodo de 15 dias.


?>
