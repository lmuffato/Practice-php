<?php

$animais = [
  "animal01" => [
    "movimento" => "voa",
    "mandibulas" => "bico",
    "cobertura" => "pena",
  ],
  "animal02" => [
    "movimento" => "voa",
    "mandibulas" => "boca",
    "cobertura" => "pelos",
  ],
  "animal03" => [
    "movimento" => "anda",
    "mandibulas" => "bico",
    "cobertura" => "pena",
  ],
  "animal04" => [
    "movimento" => "anda",
    "mandibulas" => "boca",
    "cobertura" => "pelos",
  ],
];

function tipo_do_bicho($obj) {
  // list("animal01" => $animal) = $obj;  // Desestruturação do array $obj
  extract($obj);                    // Desetrutrua o array $animal

  if ($mandibulas === "bico" || $cobertura === "pena") {
    return print("Ave"."\n");
  }
  if ($mandibulas === "boca" || $cobertura === "pelos") {
    return print("Mamífero"."\n");
  }
  return print("Indefinido"."\n");
}

tipo_do_bicho($animais["animal01"]);
tipo_do_bicho($animais["animal02"]);

function nome_do_bicho($obj) {
  extract($obj);

  if ($movimento === "voa" && $mandibulas === "bico") {
    return print("Passaro"."\n");
  }
  if ($movimento === "voa" && $mandibulas === "boca") {
    return print("Morcego"."\n");
  }
  if ($movimento === "anda" && $mandibulas === "bico") {
    return print("Galinha"."\n");
  }
  if ($movimento === "anda" && $mandibulas === "boca") {
    return print("Rato"."\n");
  }
  return print("Indefinido"."\n");
}

nome_do_bicho($animais["animal01"]);
nome_do_bicho($animais["animal02"]);
nome_do_bicho($animais["animal03"]);
nome_do_bicho($animais["animal04"]);

?>