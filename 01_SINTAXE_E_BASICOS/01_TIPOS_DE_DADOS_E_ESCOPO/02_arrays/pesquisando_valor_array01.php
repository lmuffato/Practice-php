<?php

$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key = array_search('green', $array); // $key = 2;
$key = array_search('red', $array);   // $key = 1;

$mega = [
  ["name" => "Vitta"],
  ["name" => "Vitta"],
  ["name" => "Bild"],
  ["name" => "Vitta"],
];

$mariadb = [
  ["id"=>2,"uuid"=>"ebde8a05-fe11-44ad-9b3a-39dee841c83b","name"=>"BILD DESENVOLVIMENTO IMOBILIARIO S.A."],
  ["id"=>3,"uuid"=>"a9d94282-4120-4de3-b25c-9fa9a41a483f","name"=>"VITTA RESIDENCIAL S.A."],
  ["id"=>4,"uuid"=>"334f94b4-5457-4b12-a2ec-3472434363af","name"=>"CENTRO DE INTELIGENCIA EM CONSTRUCAO E ADMINISTRACAO LTDA."]
];

print_r(array_search('Bild', $mariadb[0]));



?>
