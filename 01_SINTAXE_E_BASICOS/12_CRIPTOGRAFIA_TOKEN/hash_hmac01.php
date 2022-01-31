<?php

/*

hash_hmac(
    string $algo,
    string $data,
    string $key,
    bool $binary = false
): string

algo
Name of selected hashing algorithm (i.e. "md5", "sha256", "haval160,4", etc..) See hash_hmac_algos() for a list of supported algorithms.

data
Message to be hashed.

key
Shared secret key used for generating the HMAC variant of the message digest.

binary
When set to true, outputs raw binary data. false outputs lowercase hexits.

*/

/* EXEMPLOS */

/* CRIPTOGRARIA ripemd160*/
$token01 = hash_hmac('ripemd160', 'The quick brown fox jumped over the lazy dog.', 'secret');
// print($token01."\n");

$secret= 'The quick brown fox jumped over the lazy dog.';
$user_email = "meuemail@gmail.com";
$user_id = "10";
$user_role = "user";
$payload = $user_email.$user_id.$user_role;

/* CRIPTOGRARIA sha256 */
$token02 = hash_hmac('sha256', $payload, $secret)."\n";
print($token02."\n");
// 941b3df18bb8fec39d3da2561e75c094835e3618eeee53d86f24a1805a389c9c
// 941b3df18bb8fec39d3da2561e75c094835e3618eeee53d86f24a1805a389c9c

?>