<?php

/* HERANÇA */

/*
As classes filhas acessam métodos e atributos da classe pai.
As classes superiores (pai) não acessam métodos e atributos da classe filhas.
Atributos e métodos "private" não são acessados diretamente pelas classes filhas.
*/

class Documento {

  private $numero;

  public function setNumero($numero) {
    $this->numero = $numero;
  }


  public function getNumero() {
    print($this->numero."\n");
    return $this->numero;
  }

}

/* A função CPF extende a classe Documento, herdando seus atributos e métodos "public" e "protect" */
class CPF extends Documento {

  public function validar(): bool {
    $numeroCpf = $this->getNumero(); // (Método Herdado) A variável $numero que era "private" passou a ser acessável pelo método getNumero.
    var_dump(true);
    return true;
  }

}

$doc01 = new CPF();

$doc01->setNumero('111.111.111-11'); // Método Herdado da classe pai
$doc01->getNumero();                 // Método Herdado da classe pai
$doc01->validar();                    // Método criado na própria classe

?>