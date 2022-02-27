<?php

/* TIPOS DE DADOS QUE NÃO PASSAM NA NEGAÇÃO DO IF */
$nulo = null;
$string_vazia = '';
$falso = false;

// objeto para tentar acessar chaves que não existem
$obj = [];

// Se um valor é nulo
if (!$nulo) { print("null: "."verdade"."\n"); }

// stringo fazia
if (!$string_vazia) { print("string_vazia: "."verdade"."\n"); }

// falso
if (!$falso) { print("falso: "."verdade"."\n"); }

// se não existe variável
if (!isset($inexistente)) { print("inexistente: "."verdade"."\n"); } // retorna erro

// Uma propriedade que não existe (com isset)
if (!isset($obj['nome'])) { print("propriedade inexistente: "."verdade"."\n"); } // retorna erro

// Uma propriedade que não existe (com key_exists)
if (!key_exists('nome', $obj)) { print("propriedade inexistente: "."verdade"."\n"); } // retorna erro

/* NÃO USAR NO IF */
// Propriedades inexistentes
// Variáveis inexistente

// if (!$inexistente) { print("inexistente: "."verdade"."\n"); } // retorna erro


?>
