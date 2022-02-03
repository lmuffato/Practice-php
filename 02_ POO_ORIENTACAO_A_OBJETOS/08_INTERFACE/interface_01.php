<?php

/* INTERFACE */

/*
Usos da interface:

1. Organizar o código;
2. Programar um código para interagir com outros linguagens;
3. Padronizar procedimentos
*/

/* INTERFACE ANIMAL */
/*
Declara a função para que uma classe futura defina como o método deve se comportar
Isso permite que várias classe utilizem a interface com métodos próprios
*/
interface Animal {
  public function mover($tipo);
  public function atacar();
}

/* INTERFACE NADAR */
interface Nadar {
  public function nadar();
}

/* A Classe Cobra implementa os métodos da Classe Animal */
class Cobra implements Animal {
  
  // O nome do método precisa ser o mesmo, a variável não
  public function mover($velocidade) {
    print("A cobra rasteja à " . $velocidade . "m/seg." . "\n");
  }

  public function atacar() {
    print("A cobra picou"."\n");
  }

}

/* A Classe Cachorro implementa os métodos da Classe Animal e Nadar */
class Cachorro implements Animal, Nadar {
  
  // O nome do método precisa ser o mesmo, a variável não
  public function mover($velocidade) {
    print("O cachorro corre à " . $velocidade . "m/seg." . "\n");
  }

  public function atacar() {
    print("O cachorro mordeu"."\n");
  }

  public function nadar() {
    print("O cachorro sabe nadar."."\n");
  }

}

// Instânicia da classe Cobra
$animal01 = new Cobra();
$animal01->mover(20);
$animal01->atacar();

print("\n");

// Instânicia da classe Cachorro
$animal02 = new Cachorro();
$animal02->mover(20);
$animal02->atacar();
$animal02->nadar();

?>