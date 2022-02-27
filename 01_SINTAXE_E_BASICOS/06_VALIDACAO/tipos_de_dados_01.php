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

print(gettype(($dog01["nome"]))."\n"); // string

print(gettype(($dog01["idade"]))."\n"); // integer

print(gettype(($dog01["peso"]))."\n"); // double

print(gettype(($dog01["saudavel"]))."\n"); // boolean

print(gettype(($dog01["vacinas"]))."\n"); // Array

print(gettype(($dog01["pai"]))."\n"); // null

?>
