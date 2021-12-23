<?php

// Caminho da pasta atual
$path_actual01 = __DIR__;
// print_r($path_actual01."\n");

// Um nível acima
$parcial_path01 = dirname(__DIR__, 1);
// print_r($parcial_path01);

// Dois níveis acima
$parcial_path02 = dirname(__DIR__, 2);
// print_r($parcial_path02);

// Outra sintaxe - Um nível acima
$upOne = realpath(__DIR__ . '/..');
print_r($upOne."\n");

// Caminho entre pastas

// Outra sintaxe - Um nível acima
$upOne = realpath(__DIR__ . '/../arrays');
print_r($upOne."\n");

$newPath = realpath(dirname(__FILE__) . '/../arrays');
print_r($newPath."\n");
// Se o caminho não existir, ele não retorna o caminho.

?>