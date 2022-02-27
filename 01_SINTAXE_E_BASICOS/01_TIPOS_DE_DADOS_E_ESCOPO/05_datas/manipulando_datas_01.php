<?php

/* MANIPULANDO DATAS */

date_default_timezone_set('UTC');

# Exemplo
$myDate01 = '2022-01-31T20:07:24.458Z';

// É necessáiro converter a data de string para o formato inteiro (date unix)
$realUnixDate01 = strtotime('2022-01-31T20:07:24.458Z');
// print($realUnixDate01."\n");


/* ALTERANDO O FORMATO */
$new_date01 = date('Y-m-d', strtotime('2022-01-31T20:07:24.458Z'));
// print(gettype($new_date01)."\n");


/* CALCULO COM DATAS */

/* Usando calculo direto com o unixDate */
$myDate02 = '2022-01-31T20:07:24.458Z';

echo date_default_timezone_get()."\n";

// convertendo pra unixdate (inteiro)
$unixDate01 = strtotime('2022-01-31T20:07:24.458Z');

// Valor a subtrair
$timeToSubstract = 3 * 60 * 60;  // 3 horas em segundos


$newDate = $unixDate01 - $timeToSubstract;

print("UnixDate: " . strtotime($myDate02) . "\n");
print("New UnixDate: " . $newDate . "\n");

// print(date('Y-m-d\TH:i:s.u\Z', $newDate)."\n");

print("Horário antigo: " . date('H:i:s', $unixDate01)."\n");
print("Horário novo: " . date('H:i:s', $newDate)."\n");

// Instanciando a classe DateTime
$date01 = new DateTime();

/* Informando a data caso contráiro, será considerada a data atual de
quando a classe é instanciada */
$date01->setTimestamp(strtotime('2022-01-31T20:07:24.458Z'));

$date01->modify('-9 hour');

// print($date01->format('Y-m-d')."\n");

// print($date01->format('Y-m-d\TH:i:s.u\Z')."\n");

// print($date01->getTimestamp()."\n");


?>
