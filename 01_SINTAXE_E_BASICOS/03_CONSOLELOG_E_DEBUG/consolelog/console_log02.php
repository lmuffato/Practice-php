<?php

/* IMPRIMENTO OBJETOS E ARRAYS NO CONSOLE DO NAVEGADOR */
function debug_to_console($data, $context = 'Debug in Console') {

    // Buffering to solve problems frameworks, like header() in this and not a solid return.
    ob_start();

    $output  = 'console.info(\'' . $context . ':\');';
    $output .= 'console.log(' . json_encode($data) . ');';
    $output  = sprintf('<script>%s</script>', $output);

    echo $output;
}

// $data is the example variable, object; here an array.
$myObject = [ 'foo' => 'bar' ];
debug_to_console($myObject);

$myArray = [ 'A', 'B', 'C', 'D' ];
debug_to_console($myArray);

?>
