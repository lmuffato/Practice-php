<?php

class Cachorro {
  public $nome;
  private $idade;
  private $raca;
  static $dono;

  public function setInfo($nome, $idade, $raca) {
    $this->nome = $nome;
    $this->idade = $idade;
    $this->raca = $raca;
  }

  public function getInfo() {
    echo "O nome do dog é: ", $this->nome."\n";
    echo "O dog tem ", $this->idade . " Anos de vida" . "\n";
    echo "A raça é: ", $this->raca."\n";
    Cachorro::idadeCanina($this->idade); // Usando o método estático dentro da classe
  }

  public static function idadeCanina($idade) {
    echo "A idade canina é: ", ($idade * 7)."\n";
  }
}

// Chamando os atributos estáticos
Cachorro::$dono = "Lucas";
// echo "O nome do dono é: ", Cachorro::$dono."\n";

// Chamando o método estático
Cachorro::idadeCanina(3)."\n";

// Instanciando a classe
$newDog = new Cachorro();
$newDog->setInfo("Pretinha", 14, "Pincher");
$newDog->getInfo();

?>