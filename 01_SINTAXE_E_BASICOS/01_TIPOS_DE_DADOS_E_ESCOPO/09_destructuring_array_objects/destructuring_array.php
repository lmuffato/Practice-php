<?php

$animais = [
  "animal01" => [
    "nome" => "Martim Pescador",
    "movimento" => "voa",
    "dieta" => ["peixes"],
    "cobertura" => [
      "tipo" => "penas",
      "cor" => "Colorido"
    ],
  ],
  "animal02" => [
    "nome" => "Babuino",
    "movimento" => "anda",
    "dieta" => ["frutas", "sementes", "folhas", "pequenos animais"],
    "cobertura" => [
      "tipo" => "pelos",
      "cor" => "marrom"
    ],
  ],
];

/*
Diferenças na desestruturação em javaScript e PHP:
Em php não é possível desestruturar diretamente um obj dentro de um objeto.

*/

/* DESESTRUTURAÇAÕ GERAL */
// Desestruturando todas as chaves do array em primeiro nível.
function nome_do_bicho($obj) {
  extract($obj);  /* equivalente a: const { nome, movimento, dieta } = obj */
  print_r("nome: {$nome}"."\n");
};
nome_do_bicho($animais["animal02"]);

/* DESESTRUTURAÇÃO ESPECÍFICA */
// Especifica qual a chave e permite mudar o nome da chave na nova atribuição.
function movimento_do_bicho($obj) {
  [ "movimento" => $move ] = $obj; // Especifica a chave e o nome da variável interna que receberá o valor
  print_r("Movimento: {$move}"."\n");
};
movimento_do_bicho($animais["animal02"]);

/* DESESTRUTURAÇÃO COM ARRAYS */
function dieta_do_bicho($obj) {
  [ "dieta" => $dieta ] = $obj;
  $dieta_json = json_encode($dieta); // json para imprimir no formato json
  print_r("Comidas: ".$dieta_json."\n");
};
dieta_do_bicho($animais["animal02"]);

/* DESESTRUTURAÇÃO EM NÍVEIS */
function cobertura_do_bicho($obj) {
  [ "cobertura" => $cobertura ] = $obj;
  extract($cobertura);
  $cor_json = json_encode($cor); // json para imprimir no formato json
  print_r("Cor dos pelos: ".$cor_json."\n");
};
cobertura_do_bicho($animais["animal02"]);
?>