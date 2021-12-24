<?php

/* INCLUINDO RECURSOS DE OUTROS ARQUIVOS */

/* Métodos utilizados

include "caminho_do_arquivo.php"
require "caminho_do_arquivo.php"

Diferença entre include Vs require:

require:
1. Obriga que o arquivo exista e que esteja funcionando corretamente.
2. Caso haja um problema, interrompe a execução e retorna um erro fatal.
3. A partir do php 7, erros fatais podem ser tratados com try/catch,
impedindo a aplicação de parar.

require_once:
1. A mesma coisa que o require, porém trás o arquivo apenas uma vez, no
caso do arquivo ser chamado mais de uma vez.

include:
1. Tem mais recursos:
2. Acessa recursos internos do php no diretório padrão do php;
3. Permite acessar recursos da web, como de outro site.
*/

// MESMO NIVEL
// Importando o script do arquivo "arquivo_soma.php".
include "arquivo_soma.php"; // Arquivo na pasta atual.
print(somar(2, 3)."\n"); // 5

// NIVEL ABAIXO
// Importando o script do arquivo "arquivo_dividir.php".
include "nivel_abaixo/arquivo_dividir.php"; // Arquivo na pasta em um nivel abaixo.
print(dividir(10, 5)."\n"); // 2

// NIVEL ACIMA
// Importando o script do arquivo "arquivo_potencia.php".
include (__DIR__)."/../arquivo_potencia.php"; // Arquivo na pasta acima
print(potencia(2, 3)."\n"); // 8

// NIVEL LATERAL
// Importando o script do arquivo "arquivo_subtrair.php".
include (__DIR__)."/../nivel_lateral/arquivo_subtrair.php"; // Arquivo na pasta acima
print(subtrair(10, 5)."\n"); // 5

?>