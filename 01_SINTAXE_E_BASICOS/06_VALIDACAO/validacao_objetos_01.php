<?php

$response = [
  'city'=>'Ribeirão Preto',
  'state'=>'São Paulo',
  'localizacao'=>'',
];

if (!empty($response['state'])) { print('Tem o dado'."\n"); }

if ($response['localizacao'] === '') { print('Esta em branco'."\n"); }

if (empty($response['unidade'])) { print('Não tem o dado'."\n"); }

?>