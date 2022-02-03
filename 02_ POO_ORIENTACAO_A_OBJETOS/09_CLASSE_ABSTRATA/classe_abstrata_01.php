<?php

/* CLASSES ABSTRATAS */

/*

A diferença entre interface e classes abstratas:

interface -> Define os métodos mas não define o que eles fazem
classe abstrata -> Define os métodos e seus comportamentos

A diferença entre classe comum e classes abstratas:

O objeto nunca vai instanciar a classe abstrata, para usar a classe
abstrata, é necessário criar uma outra classe que vai extender o
comportamento da classa abstrata.

*/

/* A Classe Animal define o nome as funções dos métodos */
abstract class Animal {

  // O nome do método precisa ser o mesmo, a variável não
  public function mamifero($resposta) {
    print("O animal é mamifero? " . $resposta . "\n");
  }

  public function nadar($resposta) {
    print("O animal nada? ". $resposta ."\n");
  }

}

/* A Classe Cachorro extende os métodos da Classe Animal */
class Cachorro extends Animal {}

// Instânicia da classe Cachorro
$animal01 = new Cachorro();
$animal01->mamifero('Sim');
$animal01->nadar('Sim');

?>