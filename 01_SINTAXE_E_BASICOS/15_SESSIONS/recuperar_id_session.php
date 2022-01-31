<?php

$meu_id = "87f3qslk98eoa0kukvm0vrjfuv";

// require_once("config.php"); // Apenas no XAMP
session_start();

session_regenerate_id($meu_id);
// Recupera a sessão e todas as informações do usuário a qual pertence aquele id.

echo session_id();


?>