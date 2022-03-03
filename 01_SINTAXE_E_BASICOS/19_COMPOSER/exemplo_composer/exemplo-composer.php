<?php

/* Plugin Name: Exemplo Composer */

/* EXECUTANDO O COMPOSER

Transformando em executável

1. Remover a extensão
2. Executar o comando na pasta:

chmod +x composer

Verificar a versão do composer:

./composer --version

BAIXAR O PACOTE:

Procurar na documentação o comando da instalação via composer:

Os pacotes php do composer pondem ser verificados e acessados por esse
site, onde é possível ver as versões e os comandos para instala-los.
https://packagist.org/explore/


O pacote para esse teste é o viaCep PHP, que pode ser instaldo pelo comando abaixo:

// Instalando pelo composer local
./composer.phar require flyingluscas/viacep-php

// Instalando pelo composer global
composer require flyingluscas/viacep-php */

/* APOS BAIXAR O PACOTE */

/*
Além de baixar os pacotes, o composer vai criar 3 arquivos:
composer.json -> Contem a lista de pacotes;

composer.lock -> Contento as dependências do projeto, as versões e como elas
encaixam.

vendor -> Pasta com os pacotes baixados

*/

/* REMOVENDO PACOTES */

/*
composer remove flyingluscas/viacep-php
*/

/* UTILIZANDO O PACOTE */

// importando o arquivo para ter acesso aos pacotes baixados.
require __DIR__ . '/vendor/autoload.php';

// Name space
use SebastianBergmann\Timer\ResourceUsageFormatter;
use SebastianBergmann\Timer\Timer;

$timer = new Timer;
$timer->start();

foreach (\range(0, 100000) as $i) {
}

print (new ResourceUsageFormatter)->resourceUsage($timer->stop());


?>
