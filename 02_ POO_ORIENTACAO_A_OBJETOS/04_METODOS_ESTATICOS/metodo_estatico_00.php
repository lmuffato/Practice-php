<?php

/* MÉTODO E ATRIBUTO ESTÁTICO */

/*

Vantagem:
Não precisa instanciar a classe para usar métodos e atributos estáticos.

Quando usar:
Para organizar funções em uma classe, e para que essas funções possam
ser utilizadas sem precisar de criar objetos.

Não pode acessar atributos e métodos internos da classe.

Ao instanciar a cclase (criar o objeto) o método estático
não existirá no objeto, apenas na classe.

*/

class Login {
  public static $user;

  public static function verificaLogin() {
    echo "O usuário está logado"."\n";
  }

}

/*

Acessando atributo estático
NomeDaClasse:$atributo

Acessando métodos estáticos
NomeDaClasse:metodo()

*/

Login::$user = 'admin'; // Editando atributo estático
Login::verificaLogin(); // chamando método estático

echo "Nome do usuário: ", Login::$user;

?>