<?php

$url = 'http://localhost:3002/post';
$data = array('title' => 'Titulo php', 'content' => 'Texto em php');
$data = '{"title":"meu titulo php,	"content":"meu texto php"}';
// var_dump($data);

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'GET',
        // 'content' => http_build_query($data),
        'body' => $data,
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, true, $context);
if ($result === FALSE) { /* Handle error */ }

var_dump($result);


?>