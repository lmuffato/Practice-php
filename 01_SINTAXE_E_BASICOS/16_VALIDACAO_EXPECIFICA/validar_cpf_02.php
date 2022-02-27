<?php

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

// Testando
var_dump(cpf_validation("026.670.150-70")); // true
var_dump(cpf_validation("026.670.150-7")); // false
var_dump(cpf_validation("777.777.777-77")); // false

?>