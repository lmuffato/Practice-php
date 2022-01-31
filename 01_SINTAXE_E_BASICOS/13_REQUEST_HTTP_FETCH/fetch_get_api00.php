<?php

/* CONSUMINDO A API DE PAÍSES */

// $json = file_get_contents('https://restcountries.com/v3.1/all');
// $coutries = json_decode($json, true);
// var_dump($coutries); // Retorna todos os dados da api
// print_r($coutries[0]["name"]["common"]); // Retona o nome do primeiro país

function get_countries_name() {
  $json = file_get_contents('https://restcountries.com/v3.1/all');
  $coutries = json_decode($json, true);
  foreach ($coutries as $coutry) {
    print_r("nome: {$coutry["name"]["common"]}"."\n");
  };
};

get_countries_name();

?>
