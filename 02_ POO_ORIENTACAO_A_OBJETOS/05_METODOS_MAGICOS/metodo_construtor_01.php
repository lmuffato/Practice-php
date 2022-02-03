<?php

/* MÉTODO CONSTRUTOR

Executado quandoa  classe é iniciada

*/

class Endereco {

  private $logradouro;
  private $numero;
  private $cidade;

  /* CONSTRUTOR */
  // Tudo dentro do construtor, inicia junto com a instânica da classe
  public function __construct($a, $b, $c) {
    $this->logradouro = $a;   // Parâmetros sendo atribuidos ao instanciar a classe
    $this->numero = $b;
    $this->cidade = $c;
  }

  public function getInfo() {
    print("Rua: " . "$this->logradouro" . "\n");
    print("Numero: " . "$this->numero" . "\n");
    print("Cidade: " . "$this->cidade" . "\n");
  }

}

// Instanciando a classa e passando parâmetros

$meuEndereco = new Endereco("Avenida do Sol", "93", "Vitória");

// var_dump($meuEndereco); // Imprimir o objeto todo

$meuEndereco->getInfo();


?>