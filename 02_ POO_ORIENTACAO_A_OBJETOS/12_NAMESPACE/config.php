<?php

/* NAME SPACE */

/*

PASTA ONDE FICAM AS CLASSES
/classes/Cadastro // Onde cont/em a classe

ARQUIVO QUE CONTEM O AUTOLOAD QUE CARREGA AS CLASSES
config.php // armazena a função que carrega as classes

ARQUIVO QUE CARREGA O CONFIG
index.php



*/

spl_autoload_register(function($nameClasse) {

  $dirClass = "classes"; // pasta onde estão as classes
  
  // filename ou filepath é o nome do arquivo incluindo seu acesso direto, ou seja, seu caminho absoluto.
  $filename = __DIR__. DIRECTORY_SEPARATOR . $dirClass . DIRECTORY_SEPARATOR . $nameClasse . ".php";

  if (file_exists($filename)) { // Verifica se o arquivo existe
    require_once($filename);
  }

});

?>