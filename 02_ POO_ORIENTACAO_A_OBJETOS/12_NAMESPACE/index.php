<?php

require_once("config.php");

$newUser = new Cadastro();

$newUser->setRole("Admin");
$newUser->setNome("Lucas");

// Através do __toString, é possível imprimir o objeto, já que echo só imprime texto
echo $newUser;

print(".\n");

$animal01 = new Animal();
$animal01->getInfo();


?>