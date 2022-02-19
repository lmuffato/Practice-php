<?php

$data01 = [ 'fields' => [],	'selector'=> (object) null ];
# é o quivalente a: {"fields":[],"selector":null}

$obj01 = json_encode($data01);
print($obj01."\n");

# Objeto vazio
$obj02 = json_encode(new stdClass);
print($obj02."\n");

# Objeto vazio
$obj03 = json_encode((object) null);
print($obj03."\n");


?>

