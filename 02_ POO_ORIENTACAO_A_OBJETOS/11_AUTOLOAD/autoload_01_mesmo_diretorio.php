<?php

/* AUTOLOAD */

/*
Invoca automaticamente as classes declaradas em arquivos,
dispensando o uso de require
*/

/* Invocando arquivos do jeito tradicional do php*/
/*

require_once("Animal.php"); // Classe pai.
require_once("Cachorro.php"); // Classe que extende a classe Animal.

$doberman = new Cachorro();
$doberman->ataca();

*/

/* Invocando arquivos com o autoload*/

// O autoload recupera automaticamente as classes pelo nome.
function __autoload($nomeClasse) {
  require_once("$nomeClasse.php");
}

$doberman = new Pessoa();
$doberman->falar("Lucas");


?>