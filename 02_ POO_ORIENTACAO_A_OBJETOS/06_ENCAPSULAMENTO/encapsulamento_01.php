<?php

/* ENCAPSULAMENTO */

/*

Define quem pode acessar atributos e métodos e quais circunstâncias

Existem três modificadores de acesso:

public - A propriedade ou método pode ser acessado de qualquer lugar. Isso é padrão
protected - A propriedade ou método pode ser acessado dentro da classe e por classes derivadas dessa classe
private - A propriedade ou método só pode ser acessado dentro da classe

*/

class Pessoa {

  public $nome = "Lucas";
  protected $idade = 32;
  private $senha = "12345";

  public function verDados() {
    echo $this->nome . " (Classe Principal)" . "\n";
    echo $this->idade . " (Classe Principal)" . "\n";
    echo $this->senha . " (Classe Principal)" . "\n";
  }
}

// Instanciando a classe Pessoa (classe principal)
// $pessoa01 = new Pessoa();
// $pessoa01->verDados();

// A classe Programador extende a classe pessoa e acessa seus métodos
class Programador extends Pessoa {

  // Se o método tiver o mesmo nome, vai chamar o método da classe instanciada
  
  /* Sem criar esse método na classe Programador, o método será chamado pela
  classe Pessoa (classe pai), e com isso irá acessar todas os atributos, pois
  o método verDados() na classe Pessoa tem permissão para acessar.
  */
  public function verDados() {
    // get_class() retorna o nome da classe onde o método está sendo executado
    echo "A classe é: " . get_class() . "\n";
    echo $this->nome . " (Classe Filha)" . "\n"; // Acessa por que é public
    echo $this->idade . " (Classe Filha)" . "\n"; // Acessa por que é protect
    // echo $this->senha . " (Classe Filha)" . "\n"; // Retorna um erro pois não é possivel acessar sendo private
  }
}

// Instanciando a classe Programador (classe filha)
$pessoa02 = new Programador();
$pessoa02->verDados();

?>