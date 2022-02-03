<?php

/* MÉTODO TO STRING - SERIALIZE

Converte o objeto em string

*/

class Endereco {

  private $logradouro;
  private $numero;
  private $cidade;

  public function __construct($a, $b, $c) {
    $this->logradouro = $a;
    $this->numero = $b;
    $this->cidade = $c;
  }

  public function getInfo() {
    print("Rua: " . "$this->logradouro" . "\n");
    print("Numero: " . "$this->numero" . "\n");
    print("Cidade: " . "$this->cidade" . "\n");
  }

  // Método toString
  public function __toString() {
    // Pode se montar a maneira como o objeto será formado
    return $this->logradouro. "," .$this->numero. "," . $this->cidade;
  }
  
}

// Instanciando a classa e passando parâmetros
$meuEndereco = new Endereco("Avenida do Sol", "93", "Vitória");
// var_dump($meuEndereco); // Imprimir o objeto todo

// $meuEndereco->getInfo(); 

// echo só mostra string
echo $meuEndereco

?>