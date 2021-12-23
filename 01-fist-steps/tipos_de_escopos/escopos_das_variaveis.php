<?php

$nome = "Lucas";

/* A declaração "global" é necessária para a função ter
acesso a uma variável fora do escopo */
function teste() {
  global $nome;
  print($nome."\n");
}

/* Podem existir variáveis como mesmo nome se elas estão em
escopos diferentes */
function teste2() {
  $nome = "João";
  print($nome."\n");
}

/* Sem a declaração "global", a função não enxerga as
variáveis fora do seu escopo */
function teste3() {
  print($nome."\n"); // Não imprime nada
}

/* Sem a declaração "global", a função não enxerga as
variáveis fora do seu escopo */
function teste4() {

  function teste5() {
    print('Função 5'."\n");
  }

}

teste();
teste2();
teste3();

teste4(); // Ao ser executada, a função 4 declara a função 5.
teste5(); // Agora a função 5 pode ser chamada em qualquer escopo.

?>