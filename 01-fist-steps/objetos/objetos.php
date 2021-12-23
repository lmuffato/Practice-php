<?php

// Sintaxe completa
$arrayObj01 = array(
  "foo" => "bar",
  "bar" => "foo",
);

// print($array[bar]);

// Sintexa curta
$arrayObj02 = [
    "foo" => "bar",
    "bar" => "foo",
  ];
  
// print($array[bar]);

// Objeto / JavaScript
$arrayObj03 = [
  "nome" => "Lucas",
  "sobre_nome" => "Muffato",
  'idade' => 32,
  'escolas' => [ 'EAFA', 'São Camilo', 'Trybe' ]
];

print_r($arrayObj03);

// Isso é equivalente a:
/*
const arrayObj03 = {
  nome: 'Lucas',
  sobreNome: 'Muffato',
  idade: 32,
  escolas: [ 'EAFA', 'São Camilo', 'Trybe' ]
};

*/



?>