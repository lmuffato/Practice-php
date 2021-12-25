<?php

$animais = [
  "animal01" => [
    "movimento" => "voa",
    "mandibulas" => "bico",
  ],
  "animal02" => [
    "movimento" => "voa",
    "mandibulas" => "boca",
  ],
];

function tipo_do_bicho($obj) {
  // list("animal01"["movimento"] => $animal) = $obj; // Desestruturação de array
  extract($obj);
  print_r($animal01);
  // $movimento = $obj["animal01"]["movimento"];
  // print_r($obj["animal01"]["movimento"]);
}

tipo_do_bicho($animais);

?>