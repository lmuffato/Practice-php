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

// print($texto1."\n"); // Meu texto 1
// print($texto2."\n"); // Meu texto 1
// print("$texto2"."\n"); // Meu texto 1
// print('$texto2'."\n"); // $texto2

// FUNÇÕES PARA STRING
$nome01 = "lucas muffato";
$nome02 = "LUCAS MUFFATO";
$nome03 = "lucas muffato";

/* ALTERANDO A CAIXA DAS LETRAS */

// Todas as letras em maiúsculas
$caixa_calta = strtoupper($nome01);
// print($caixa_calta."\n");

// Todas as letras em minusculas
$caixa_baixa = strtolower($nome02);
// print($caixa_baixa."\n");

// Converte a primeira letra para maiuscula.
$iniciais_caixa_alta = ucwords($nome03);
// print($iniciais_caixa_alta."\n");

/* TROCANDO TERMOS DA STRING */
$texto3 = "the brown fox jumped over the lazy dog";
$newTexto3 = str_replace('o', '0', $texto3); // Não é mutável.
// print($newTexto3."\n");

/* INDICE DE SRTING DENTRO DO TEXTO */
$posicao01 = strpos($texto3, "brown");
// print($posicao01."\n");

/* BUSCA UM TEXTO A PARTIR DE UM INDICE */
$texto04 = substr($texto3, 0, 7); // Busca o texto do índice 0 até o 7.
// print($texto04."\n");

/* VERIFICANDO SE STRING EXISTE DENTRO DO TEXTO */
$frase01 = "the brown fox jumped over the lazy dog";
$termo01 = "jumped";
// print(preg_match("/{$termo01}/", $frase01)); // retorna 1 ou 0.


/* SEPARANDO STRINGS COM TERMOS ESPECÍFICOS */
$frase2 = "the brown fox jumped over the lazy dog";
$termo02 = explode(" ", $frase2);
var_dump($termo02);

/* CRIANDO UM ARRAY COM TERMOS DESESTRUTURADOS DE UMA STRING */
$data = "foo:*:1023:1000::/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
print($user."\n"); // foo
print($pass."\n"); // *

?>