<?php
/* É necessário instalar o pacote curl do PHP para utilizar esse recurso.
sudo apt-get install php-curl
*/

$url = 'http://localhost:3002/post';
$data = array("title" => "PHP","content" => "PHP TEXT");

$postdata = json_encode($data);

$ch = curl_init($url); 
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
$result = curl_exec($ch);
curl_close($ch);
print_r ($result)

?>