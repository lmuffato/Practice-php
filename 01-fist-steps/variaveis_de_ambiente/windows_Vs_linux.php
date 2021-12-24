<?php

// Separador de diretório
$dir_separator = DIRECTORY_SEPARATOR;
print_r($dir_separator."\n");

// Separador de caminho
$path_separator = PATH_SEPARATOR;
print_r($path_separator."\n");

// Usando separador nas funções 
function file_build_path(...$segments) {
  return join(DIRECTORY_SEPARATOR, $segments);
}

$full_path = file_build_path("home", "alice", "Documents", "example.txt");
// print($full_path);

// Caminho completo até o arquivo em que é executado.
print((__FILE__)."\n");

// Caminho completo até a pasta onde o arquivo é executado.
print((__DIR__)."\n");


?>