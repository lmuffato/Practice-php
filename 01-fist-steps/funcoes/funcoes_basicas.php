<?php

$tex = 'Meu Texto';

// Função com parâmetro e retornando variável
function foo($texto)
{
  return $texto;
}
print_r(foo($tex));

// Função recursiva

function recursion($a)
{
    if ($a < 20) {
        echo "$a\n";
        recursion($a + 1);
    }
}



?>
