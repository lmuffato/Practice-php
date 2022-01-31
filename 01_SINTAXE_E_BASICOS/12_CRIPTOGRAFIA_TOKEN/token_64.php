<?php

$client_secret = '12345678';
$user_name = 'lucas muffato';
$user_email = 'meuemail@gmail.com';
$token = base64_encode("$user_name: $client_secret.$user_email");
$token_reverso = base64_decode($token);

print($token_reverso."\n");

?>