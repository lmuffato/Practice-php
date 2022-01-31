<?php

/* FUNÇÕES DAS SESSÕES
São funções importantes para a acessar recursos da sessão.
*/

// require_once("config.php");

session_start();

echo "<br>";

var_dump(session_status());

echo "<br>";

switch(session_status()) {
  case PHP_SESSION_DISABLE:
    echo "Se as sessões estiverem desabilitadas.";
    break;

  case PHP_SESSION_NONE:
    echo "Se as sessões estiverem habilitadas, mas nenhuma existir.";
    break;

  case PHP_SESSION_NONE:
    echo "Se as sessões estiverem desabilitadas.";
    break;
}

?>