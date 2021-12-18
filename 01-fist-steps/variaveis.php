<?php

/*  */

$texto = 'Meu texto';

$meuArray = ['A', 'B', 'C', 'D', 'E', 'F'];
print_r($meuArray);

$novoArray = array('A1', 'B2', 'C3', 'D4', 'E5', 'F6');
print_r($novoArray);

$minhaData = new DateTime();
print_r($minhaData);

# EXCLUINDO VARIÁVEL
unset($novoArray);

# Pode-se excluir várias variáveis
unset($novoArray, $texto);

# Retorna um erro
// print_r($novoArray);

# echo $texto;

# VERIFICAR SE VARIÁVEL EXISTE

if (isset($texto)) {
    print('true');
} else { print('false'); }


?>