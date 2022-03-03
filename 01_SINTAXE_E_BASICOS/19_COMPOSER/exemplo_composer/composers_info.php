<?php

/*
ATUALIZANDO PACOTES:
composer update vendor/packageName1 vendor/packageName2

VESÃO ESPECIFICA
composer require packageName:0.10.2

CONTROLE DE VERSÕES

^1.0.0

o acento circunflexo (^) é definido como a opção para maior interoperabilidade.
Isso significa que o Composer sempre vai atualizar o pacote até que uma certa
versão quebre-o de alguma maneira.

No nosso caso, a faixa de atualização é >=1.0.9 <2.0.0,
já que a versão 2.0.0 vai quebrar a retrocompatibilidade.


Operador ~
exemplo: ~1.2 é equivalente a >=1.2 <2.0.0,
enquanto ~1.2.3é equivalente a >=1.2.3 <1.3.0

EXEMPLO:

"require": {
    "vendor/package": "1.3.2", // exatamente 1.3.2

    // >, <, >=, <= | especificar limites superior/inferior
    "vendor/package": ">=1.3.2", // qualquer coisa acima ou igual a 1.3.2
    "vendor/package": "<1.3.2", // qualquer coisa abaixo 1.3.2

    // * | curinga
    "vendor/package": "1.3.*", // >=1.3.0 <1.4.0

    // ~ | permite que o último dígito especificado suba
    "vendor/package": "~1.3.2", // >=1.3.2 <1.4.0
    "vendor/package": "~1.3", // >=1.3.0 <2.0.0

    // ^ | não permite alterações de quebra (versão principal corrigida - seguindo sem ver)
    "vendor/package": "^1.3.2", // >=1.3.2 <2.0.0
    "vendor/package": "^0.3.2", // >=0.3.2 <0.4.0 // exceto se a versão principal for 0
}

*/
?>
