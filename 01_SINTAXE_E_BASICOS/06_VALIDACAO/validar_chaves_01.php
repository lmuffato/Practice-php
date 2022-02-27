<?php

$dog01 = [
  "nome" => "Rex",
  "idade" => 2,
  "peso" => 30.5,
  "saudavel" => true,
  "cirurgias" => [],
  "raca" => '',
  "pai" => null,
  "vacinas" => ["Raiva", "Cinomose canina", "Tosse dos canis"],
];

// Verificando o tipo do dados

print(key_exists("nome", $dog01)); // 1
print(key_exists("dono", $dog01)); // 0

?>
