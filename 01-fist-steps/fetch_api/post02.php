<?php

// Create map with request parameters
$params = array ('title' => 'Meu titulo php', 'content' => 'meu texto php');
// $params = '{"title":"meu titulo php", "content":"meu texto php"}';

// Build Http query using params
$query = http_build_query ($params);
var_dump($query);

// Create Http context details
$contextData = array (
            'method' => 'GET',
            'header' => " ",
            'content'=> $query );

// Create context resource for our request
$context = stream_context_create (array ( 'http' => $contextData ));

// Read page rendered as result of your POST request
$result =  file_get_contents (
              'http://localhost:3002/post',  // page url
              true,
              $context);

// Server response is now stored in $result variable so you can process it

?>