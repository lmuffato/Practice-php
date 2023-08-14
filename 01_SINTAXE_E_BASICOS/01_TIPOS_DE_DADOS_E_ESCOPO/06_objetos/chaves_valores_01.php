<?php

$objs = [
  "nome" => "Lucas", 
  "sobreNome" => "Muffato",
];

$objKeys = array_keys($objs);

foreach($objKeys as $objKey) {

  print($objs["$objKey"]."\n");
}

// print_r($obj[0]);
