<?php

class Carro {

  private $modelo; // Atributos declarados da classe;
  private $motor; // Os atributos privados só podem ser acessados por métodos da classe
  private $ano;
  
  public $marca = 'Ford';

  public function getModelo(): string {
    return $this->modelo; // O $this->modelo está acessando o atributo modelo que pertence a classe
  }

  public function setModelo($modelo) {
    $this->modelo = $modelo; // Atribuindo um novo valor ao atributo
  }

  public function getMotor(): float {
    return $this->motor;
  }

  public function setMotor($motor) {
    $this->motor = $motor;
  }

  public function getAno(): int {
    return $this->ano;
  }

  public function setAno($ano) {
    $this->ano = $ano;
  }

  public function exibir() {
    return [
      "modelo" => $this->getModelo(),
      "motor" => $this->getMotor(),
      "ano" => $this->getAno(),
    ];
  }

}

/* Instanciando a classe */
$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2020");

$valore01 = $gol->exibir();
// var_dump($valore01);

/* Acessando um método público da classe; */
var_dump($gol->marca); // O atributo público pode ser acessado diretamente

/* Métodos privados não podem ser acessados diretamente; */
var_dump($gol->modelo); // Retorna o erro: "Uncaught Error: Cannot access private property"

?>