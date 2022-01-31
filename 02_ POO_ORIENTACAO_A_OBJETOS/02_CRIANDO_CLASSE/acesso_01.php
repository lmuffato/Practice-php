<?php

/*

Existem três modificadores de acesso:

public - A propriedade ou método pode ser acessado de qualquer lugar. Isso é padrão
protected - A propriedade ou método pode ser acessado dentro da classe e por classes derivadas dessa classe
private - A propriedade ou método só pode ser acessado dentro da classe

*/

class Fruta {
  public $nome;
  protected $cor;
  private $peso;

  public function set_info($nome, $cor, $peso) {
    $this->nome = $nome;
    $this->cor = $cor;
    $this->peso = $peso;
  }

  public function get_name() {
    return  $this->nome;
  }
  
  public function get_cor() {
    return $this->cor;
  }

  public function get_peso() {
    return $this->peso;
  }

}

/* Instanciando a classe */
$manga = new Fruta();

/* Editando um atributo público diretamente */
$manga->name = 'manga'; // Os atributos "protected" e "private" não podem ser editados diretamente, só atributos "public".

/* Editando os atributo "public", "private" e "protected" através de uma função da classe */
$manga->set_info('Manga', 'Amarelo', '500G');

/* Acessando o atributo public diretamente */
var_dump($manga->nome);

/* Acessando o atributo protected através da classe public */
var_dump($manga->get_cor());

/* Acessando o atributo private através da classe public */
var_dump($manga->get_peso());

?>