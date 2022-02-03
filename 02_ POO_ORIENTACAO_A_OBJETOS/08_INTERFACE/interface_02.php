<?php

/* INTERFACE */

/*
Usos da interface:

1. Organizar o código;
2. Programar um código para interagir com outros linguagens;
3. Padronizar procedimentos
*/

interface Veiculo {
  public function acelerar($velocidade);
  public function freiar($velocidade);
}

/* A Classe Civi implementa os métodos da Classe Veículo */
class Civic implements Veiculo {
  
  // O nome do método precisa ser o mesmo, a variável não
  public function acelerar($velocidade) {
    print("O veículo acelerou até: " . $velocidade . "\n");
  }

  public function freiar($velocidade) {
    print("O veículo frenou até: " . $velocidade . "\n");
  }

}


$carr01 = new Civic();

$carr01->acelerar(100)

?>