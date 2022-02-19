<?php

$dog = [
  "nome" => "Bob",
  "idade" => 1,
];

// print($dog["nome"]);
print($dog["dono"] ?? 'nada');

?>
