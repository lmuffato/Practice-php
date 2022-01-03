<?php

// require("config.php"); Para o servidor XAMPP
session_start();

 // A cada novo refresh da página, gera um novo id de sessão.
session_regenerate_id();

/* IMPORTANTE:
Se um hacker tiver acesso ao id de sessão de um usuário, ele pode
tomar a sessão e acessar os dados desse usuário.

Com isso é possível acessar a sessão do outro usuário mesmo sem login.

O id de sessão deve ser protegido!
*/

echo session_id();

var_dump($_SESSION);

?>