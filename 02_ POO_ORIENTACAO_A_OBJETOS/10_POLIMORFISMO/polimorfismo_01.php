<?php

/* POLIMORFISMO */

/*
Alterar o comportamento de um método através da extensão da classe.
*/

// Classe principal, onde os métodos foram definidos
class Animal {

  public function falar() {
    return "Emite som";
  }

  public function ataca() {
    return "Ataca.";
  }

}

// A função cachorro exetnde a função Animal
class Cachorro extends Animal {
  
  /* Polimorfismo - A função fala() da classe cachorro altera
  o comportamento do método falar() da classe Animal */
  public function falar() {
    print("Late."."\n");
  }

  public function ataca() {
    print("Morde."."\n");
  }

}

class Gato extends Animal {
  
  public function falar() {
    print("Mia."."\n");
  }

  public function ataca() {
    print("Arranha."."\n");
  }

}

class Pato extends Animal {
  
  public function falar() {
    print("Faz Quaê."."\n");
  }

  public function ataca() {
    /* herança - parent::funcao() invoca a função
    com seu comportamento original na classe pai. */
    print("Bica e ". parent::ataca() ."\n");
  }

}

$animal01 = new Cachorro;
$animal01->falar();
$animal01->ataca();

print("\n");

$animal02 = new Gato;
$animal02->falar();
$animal02->ataca();

print("\n");

$animal03 = new Pato;
$animal03->falar();
$animal03->ataca();

?>