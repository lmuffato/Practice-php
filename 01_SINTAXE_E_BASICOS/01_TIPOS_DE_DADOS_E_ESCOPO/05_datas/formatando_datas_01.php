<?php

/* FORMATANDO DATAS */

// date_default_timezone_set('UTC');

# Exemplo
$myDate01 = '2022-01-31T20:07:24.458Z';

// É necessáiro converter a data de string para o formato inteiro (date unix)
$realUnixDate01 = strtotime('2022-01-31T20:07:24.458Z');
// print($realUnixDate01."\n");


/* ALTERANDO O FORMATO */
$new_date01 = date('Y-m-d', strtotime('2022-01-31T20:07:24.458Z'));
// print(gettype($new_date01)."\n");


/* CALCULO COM DATAS */

// Instanciando a classe DateTime
$date01 = new DateTime();

print($date01->format('Y-m-d\TH:i:s.u\Z')."\n");


?>
