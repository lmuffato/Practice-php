<?php

/* MÉTODOS ESTÁTICOS */

/*
Chamar um método dentro da classe.
Dispensa a necessida de criar um novo objeto para instanciar a classe, apenas para usar um método.
O método pode ser usado como "middleware" detro da classa, fazendo verificação e validação.
*/

class Documento {
  private $numero;

  public function getNumero() {
    return $this->numero;
  }

  public function setNumero($numero) {
    $cpf_is_valid = Documento::validarCPF($numero); // Usando o método da classa fora da função nomeDaClas::Metodo
    if ($cpf_is_valid === false) {
      throw new Exception("CPF informado não é válido", 1); // Retorna PHP Fatal error:  Uncaught Exception: CPF informado não é válido
    }

    $this->numero = $numero;
  }

  public static function validarCPF($numero_cpf) {

    function extract_cpf_only_numbers($cpf): string {
      $special_caracters = [".", " ", "-"];
      $cpf = str_replace($special_caracters, "", $cpf);
      return $cpf;
    }
    
    function verify_cpf_contains_11_digits($cpf): bool {
      if (strlen($cpf) === 11) return true;
      return false;
    }
    
    function cpf_false_generator(): array {
      $arrayList = [1,2,3,4,5,6,7,8,9];
      $false_cpf_list = [];
      for ($i = 0; $i <= 9; $i++) {
       array_push($false_cpf_list, str_repeat($i, 11));
      }
      return $false_cpf_list;
    }
    
    function verify_cpf_is_valid($cpf): bool {
      $arrayFalseCpfList = cpf_false_generator();
      if (in_array("$cpf", $arrayFalseCpfList, true)) { 
        return false;
      } return true;
    }
    
    function cpf_validation($cpf): bool {
      $cpf_numbers = extract_cpf_only_numbers($cpf);
      if (!verify_cpf_contains_11_digits($cpf_numbers)) return false;
      if (!verify_cpf_is_valid($cpf_numbers)) return false;
      if (!verify_cpf_is_valid($cpf_numbers)) return false;
      return true;
    }
    return cpf_validation($numero_cpf);
  }

}

$cpf1 = new Documento();
$cpf1 -> setNumero('123.456.789-5');
var_dump($cpf1 -> getNumero());

// $cpf2 = new Documento();
// $cpf2 -> setNumero('123.456.789'); // PHP Fatal error:  Uncaught Exception: CPF informado não é válido
// var_dump($cpf2 -> getNumero());


?>