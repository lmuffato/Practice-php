<?php

/* ARRAY BIDIRECIONAL */
// array[linha][coluna] = valor;
// É possível gerar matrizes com esse tipo de array;
$carros[0][0] = "Fiat Uno";
$carros[0][1] = "Honda Civic";
$carros[0][2] = "Gol";
$carros[0][3] = "Ferray";

$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusca";
$carros[1][3] = "Estrada";

// impriminado a matriz
var_dump($carros);

// Imprimir informação específica específico:
print($carros[0][1]."\n"); // Honda Civic

// Ultimo termo do array:
print(end($carros[0])."\n"); // Ultimo carro da linha 1 (termo 0 do array);

// Editando termos do array
$carros[1][3] = "Hilux"; // Atribuição de um novo valor a uma posição já existente.
print($carros[1][3]."\n");

?>