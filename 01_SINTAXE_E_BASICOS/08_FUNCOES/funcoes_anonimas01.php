<?php

function test($callBack) {
  $callBack();
}

/* FUNÇÃO ANONIMA */
test(function() {
  echo "Terminou!"."\n";
});

/* FUNÇÃO DENTRO DE VARIÁVEL */
$fn01 = function($a) {
  var_dump($a);
};

$fn01("Ola");

?>