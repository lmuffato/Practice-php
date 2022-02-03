<?php


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


?>