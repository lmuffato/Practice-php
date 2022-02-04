<?php

$response = [
  'city'=>'Ribeirão Preto',
  'state'=>'São Paulo',
  'localizacao'=>'',
];

if (!empty($response['state'])) { print('tem o dado'."\n"); }
if ($response['localizacao'] === '') { print('Esta em branco'."\n"); }
if (empty($response['unidade'])) { print('não tem o dado'."\n"); }

// var_dump($response);

?>