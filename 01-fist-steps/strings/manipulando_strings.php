<?php

// Tipos de strings em textos simples
/* Todos os exemplos abaixo funcionam como texto. */
$texto1 = 'Meu texto 1';
$texto2 = "Meu texto 2";
// $texto3 = `Meu texto 3`; // Não funciona

// Características especiais
/* Utilizando as apas duplas, o php verifica se o conteúdo do que é passado.
Se for uma variável, ele imprime o conteúdo ou a função de uma tag html.

Isso é equivalente ao template literals do javascript.
*/

print($texto1."\n"); // Meu texto 1
print($texto2."\n"); // Meu texto 1
print("$texto2"."\n"); // Meu texto 1
print('$texto2'."\n"); // $texto2

// FUNÇÕES PARA STRING
$nome01 = "lucas muffato";
$nome02 = "LUCAS MUFFATO";
$nome03 = "lucas muffato";

/* ALTERANDO A CAIXA DAS LETRAS */

// Todas as letras em maiúsculas
$caixa_calta = strtoupper($nome01);
print($caixa_calta."\n");

// Todas as letras em minusculas
$caixa_baixa = strtolower($nome02);
print($caixa_baixa."\n");

// Converte a primeira letra para maiuscula.
$iniciais_caixa_alta = ucwords($nome03);
print($iniciais_caixa_alta."\n");

/* TROCANDO TERMOS DA STRING */

?>