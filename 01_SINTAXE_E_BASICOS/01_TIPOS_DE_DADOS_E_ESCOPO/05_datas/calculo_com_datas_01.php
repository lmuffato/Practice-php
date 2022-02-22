<?php

# Exemplo
$date1 = '2022-01-31T20:07:24.458Z';

/* CLASSE DATETIME */

/*
A classe datetime possui vários métodos para a manipulação de datas
*/

// Instanciando a classe
$date01 = new DateTime();

// É necessário configurar o timezone para especificar os fusorarios
$date01->setTimezone((new DateTimeZone('America/Sao_Paulo')));

// RETORNAR A DATA NO FORMATO ISO
$mydate = $date01->format('Y-m-d\TH:i:s.u\Z');

# OPERAÇÕES COM DATAS
$date01->modify('-3 hour');
print($date01->format('Y-m-d'));

?>
