<?php
/* PARA TESTAR A SESSÃO
O arquivo com a sessão deve ser salvo
na pasta do servidor.
xampp\htdocs\session
*/

/* CARACTERÍSTICA DA SESSÃO

Ao acessar um site, é criado um arquivo temporário no servidor e outro na máquina do usuário, onde
as informações deverão ser "amarradas".

Características da sessão:
1. A variável de sessão cria um arquivo no computado do usuário.
2. Todas as variáveis gravadas na sessão, são acessíveis ao código que exetura para o usuário.
3. Navegadores com nivel de segurança alto, não permitem que sites criem arquivos nele.

*/

// Consegue acessar os arquivos de configuração
require_once("config.php");

session_start();

$_SESSION["nome"] = "Hcode";

// A variável "nome" pode ser acessada por outro script php
echo $_SESSION["nome"];

/* APAGAR A SESSÃO */
// Apagando por session_unset()
session_unset($_SESSION["nome"]);  // limpa a variável de sessão

// Apagando por unset()
unset($_SESSION["nome"]);  // limpa a variável de sessão

// Apagando por session_destroy()
session_destroy(); // limpa a variável de sessão e remove o usuário

?>