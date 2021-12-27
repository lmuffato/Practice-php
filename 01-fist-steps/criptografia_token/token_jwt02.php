<?php 

/* CONFIGURAÇÃO DO JWT "LIKE JavaScript

O JWT tem palavras reservadas e recomendadas para serem colocadas dentro do payload.
São elas:

“iss” O domínio da aplicação geradora do token
“sub” É o assunto do token, mas é muito utilizado para guarda o ID do usuário
“aud” Define quem pode usar o token
“exp” Data para expiração do token
“nbf” Define uma data para qual o token não pode ser aceito antes dela
“iat” Data de criação do token
“jti” O id do token
*/

$header = [
   'alg' => 'HS256',
   'typ' => 'JWT',
   'exp' => '7d',
];

$header = json_encode($header);
$header = base64_encode($header);

$payload = [
   'iss' => 'localhost',
   'name' => 'Diogo',
   'email' => 'diogo.fragabemfica@gmail.com'
];
$payload = json_encode($payload);
$payload = base64_encode($payload);

$signature = hash_hmac('sha256',"$header.$payload",false);
// print($signature."\n");

$signature02 = base64_encode($signature);
// print($signature02."\n");

$token = "$header.$payload.$signature02";
// print($token."\n");

$decodificar = base64_decode($payload);
print($decodificar."\n");

// print_r(json_decode(base64_decode($token)));

?>