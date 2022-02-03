<?php

/* AUTOLOAD */

/*
Invoca automaticamente as classes declaradas em arquivos,
dispensando o uso de require
*/

/* Invocando arquivos do jeito tradicional do php*/
/*

require_once("classes/Animal.php"); // Classe pai.
require_once("classes/Cachorro.php"); // Classe que extende a classe Animal.

$doberman = new Cachorro();
$doberman->ataca();

*/

/* Invocando arquivos com o autoload*/

/*
O autoload recupera automaticamente as classes pelo nome.
No caso do arquivo da pasta estiver contido em subpastas
especificar o caminho.
*/

function __autoload($nomeClasse) {
  // Caminho relativo
  // require_once("/classes/$nomeClasse.php"); // Caminho relativo ao arquivo que invoca a classe.

  // Caminho absoluto
  // require_once(__DIR__."/classes/$nomeClasse.php"); // Caminho absoluto ao arquivo que contem a classe.

  // Caminho absoluto independente de sistema operacional
  // O divisor de diretório do windows é "\" e do linux é "/".
  // A variável DIRECTORY_SEPARATOR coleta o separador do sistema, o que evita incompatibilidades.
  require_once(__DIR__. DIRECTORY_SEPARATOR ."classes". DIRECTORY_SEPARATOR ."$nomeClasse.php"); // Caminho absoluto ao arquivo que contem a classe.

}

$doberman = new Cachorro();
$doberman->ataca();

?>