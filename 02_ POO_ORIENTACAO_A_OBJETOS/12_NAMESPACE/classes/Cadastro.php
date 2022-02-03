<?php

class Cadastro {

  private $nome;
  private $role;

  public function setNome(string $nome):string {
    $this->nome = $nome;
    return $this->nome;
  }

  public function setRole(string $role):string {
    $this->role = $role;
    return $this->role;
  }

  public function getInfo() {
    print("Usuário: " . $this->nome . "\n");
    print("Role: " . $this->role . "\n");
  }

  // __toString converte o objeto instanciado em string
  public function __toString() {
    return json_encode([  // Converte em json
      "nome"=>$this->nome,
      "role"=>$this->role,
    ]);
  }

}

// $newUser = new Cadastro();

// $newUser->setRole("Admin");
// $newUser->setNome("Lucas");

// // Através do __toString, é possível imprimir o objeto, já que echo só imprime texto
// echo $newUser;

?>