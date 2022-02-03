<?php

/* AUTOLOAD */

/*
Invoca automaticamente as classes declaradas em arquivos,
dispensando o uso de require
*/

function incluirClasses($nomeClasse) {
  
  // Verifica se existe esse arquivo existe, para que no caso contrário, não cause um erro fatal
  // file_exists só funciona com o caminho absoluto
  if (file_exists(__DIR__."/".$nomeClasse.".php") === true) { // Se existir no diretorio atual
  // A variável DIRECTORY_SEPARATOR coleta o separador do sistema, o que evita incompatibilidades.
  require_once(__DIR__."/".$nomeClasse.".php"); // Caminho absoluto ao arquivo que contem a classe.  
  }
  else { require_once(__DIR__."/classes/".$nomeClasse.".php");
  } // procurar no diretorio filho

}

spl_autoload_register("incluirClasses");

$doberman = new Cachorro();
$doberman->ataca();

print("\n");

$pesso01 = new Pessoa();
$pesso01->falar("Lucas");

?>