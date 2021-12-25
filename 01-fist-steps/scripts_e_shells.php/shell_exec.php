<?php

// Caminho da pasta atual
$path_actual01 = __DIR__;

var_dump($files);

$output = shell_exec('ls'); // Listanto as pastas existente no local onde o arquivo é executado.
echo $output;

?>