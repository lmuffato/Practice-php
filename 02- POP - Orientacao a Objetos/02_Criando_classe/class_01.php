<?php

/* Nome das classes devem começar com letra maiúsculas */

/* Atributo fora do método, é acessado normalmente, já os
atributos dentro do método, precisam do $this-> */

class Pessoa {  // Nova Classe
  
  public $nome; // encapsulamento

  public function falar() {
    return "O meu nome é ".$this->nome; // $this acessa o atributo da própria class
  }
}

$joao = new Pessoa(); // instanciando a classe
$joao->nome = "Joao"; // definindo o valor do atributo nome
$falou01 = $joao->falar(); // Acessando o método

print($falou01);


?>