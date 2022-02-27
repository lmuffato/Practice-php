<?php

/* CLASSE DATETIME */

/*
A classe datetime possui vários métodos para a manipulação de datas
*/

// Instanciando a classe
$date01 = new DateTime('2022-01-31T20:07:24.458Z');

/* TIME ZONE */



// É necessário configurar o timezone para especificar os fusorarios
// $date01->setTimezone((new DateTimeZone('UTC')));
// $date01->

$date01->modify('-3 hour');
// print_r($date01);
print($date01->format('Y-m-d')."\n");

// RETORNAR A DATA NO FORMATO ISO
$mydate = $date01->format('Y-m-d\TH:i:s.u\Z');
print($mydate);

# OPERAÇÕES COM DATAS
// $date01->modify('-3 hour');
// print($date01->format('Y-m-d'));
// print($mydate = $date01->format('Y-m-d\TH:i:s.u\Z'));

?>
