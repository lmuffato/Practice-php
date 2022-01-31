<?php

// Usado no XAMP
// require_once("config.php"); // Substituio o session_start()
session_start();

$_SESSION["nome"] = "trbe";

/* Id da sessão:
1. id único gerado ao iniciar a sessão.
2. Cada nova aba, gera um id novo.
*/

echo session_id();

?>