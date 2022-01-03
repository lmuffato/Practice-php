<?php

/* FUNÇÃO DATE */
/* Retorna a data atual através de parâmetros
A função date sempre busca o idioma do servidor, no caso de
datas fornecidas por extenso. */

/*
date("Y"); // 2022
date("y"); // 22

date("d"); // 01 (dia do mês)
date("D"); // sat (dia por extenso)

date("H"); // 20 (padrão 24)
date("h"); // 08 (padrão 12)
*/

$data01 = date("d/m/Y H:i:s"); // 01/01/2022 20:23:29
print($data01."\n");

/* FUNÇÃO TIME */
/* Quantidade de segundos passados após 01/01/1970 (data unix),
esse valor também é chamado de timestamp
*/
$data02 = time();
print($data02."\n");

/* STRING TO TIMESTAMPS */
$data03 = strtotime("2011-09-11");
print($data03."\n");

$data04 = strtotime("now");
print($data04."\n");

$data05 = date("1, d/m/Y", $data04);
print($data05."\n");

/* CONTAS COM TIMESTAMPS */
$data06 = strtotime("1+ week");
print(date("d/m/Y", $data06)."\n");

$data_de_hoje = new DateTime();
// print_r($data_de_hoje);

?>