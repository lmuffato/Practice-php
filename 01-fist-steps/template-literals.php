<?php

$texto = 'Meu texto';

$nome = 'Lucas';

$sobrenome = 'Muffato';

$nomeCompleto = $nome . ' ' . $sobrenome;

print ($nomeCompleto);

/* O equivalente ao template literals do javaScript */

print_r(" Hello {$texto}");

print(" Hello {$texto}");

echo " Hello {$texto}";

?>