<?php

/* REQUISIÇÃO POST */

$url = 'http://localhost:3002/post';
$data = array('title' => 'Titulo php 3', 'content' => 'Texto em php 3');

$options = array(
        'http' => array(
        'header'  => "Content-type: application/json\r\n", // header sem informação
        /* headers com campos como authorization
          Cada novo campo é concatnado com um "." conforme abaixo.
          'header'  => "Content-type: application/json\r\n"."authorization: 2",
        */
        'authorization' => "1",
        'method'  => 'POST',
        'content' => json_encode($data),
    )
);

$context  = stream_context_create($options);
$result = file_get_contents( $url, false, $context );
$response = json_decode( $result );
var_dump($response);

/* REQUISIÇÃO COM VÁRIOS DADOS */

$client_secret = '12345678';
$user_name = 'lucas muffato';
$user_email = 'meuemail@gmail.com';
$token = base64_encode("$user_name: $client_secret.$user_email");
$token_reverso = base64_decode($token);

print_r($token);

?>