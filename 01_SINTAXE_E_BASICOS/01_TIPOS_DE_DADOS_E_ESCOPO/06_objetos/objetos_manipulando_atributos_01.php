<?php

$dog01 = [
  "nome"=>"Rex",
  "idade"=> 2,
  "vacinas"=>["Raiva", "Cinomose canina", "Tosse dos canis"],
];

$dog01['dono'] = "Lucas";

array_push($dog01['vacinas'], "Parainfluenza Canina");

$dog01['nome'] = "Max";

print_r($dog01)

?>
