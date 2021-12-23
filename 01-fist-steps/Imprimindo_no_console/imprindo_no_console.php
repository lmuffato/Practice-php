<?php

$texto = 'Meu texto';

/* Sintaxe semelhante ao console.log() do javaScript

Eco :

É uma declaração não uma função Sem valor de retorno
Não é necessário os parênteses
Não imprimir matriz

print()
É função real
Tipo de retorno 1
Necessário Parênteses
Não imprimir matriz

Print_r
Imprimir em formato legível por humanos
String não está entre aspas
Informações não detalhadas da variável, como tipo e todas

var_dump
Todas as informações de despejo da variável, como tipo de elemento e subelemento*/

/* print_r () é usada para imprimir informações legíveis por humanos sobre uma variável. */
print_r($texto);

/*Assim como o eco , a impressão pode ser usada com ou sem parênteses.*/
print($texto."\n");

// O "\n" , pula uma linha ao final do echo
echo $texto."\n";

echo $texto."\n";

?>