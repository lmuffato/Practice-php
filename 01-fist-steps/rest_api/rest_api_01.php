<?php
$method = $_SERVER['REQUEST_METHOD'];
$request = explode("/", substr(@$_SERVER['PATH_INFO'], 1));

switch ($method) {
  case 'PUT':
    do_something_with_put($request);  
    break;
  case 'POST':
    do_something_with_post($request);  
    break;
  case 'GET':
    do_something_with_get($request);  
    break;
  default:
    handle_error($request);  
    break;
}

?>
