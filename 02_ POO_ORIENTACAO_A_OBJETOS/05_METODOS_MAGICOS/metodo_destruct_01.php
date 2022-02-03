<?php

/* MÉTODO DESTRUCT

Executado quando o objeto é destruído (removido da memório)

Isso acontece em duas ocasiões:

1. Quando a página chega no fim da execução e o php remove as variáveis da memória

2. Quando remove da memoria deliberadamente, usando unset()

Quando usar:

1. Liberar espaço na memória
2. Matar variáveis
3. Desconetar do banco de dados
4. Qualquer ação automática quando o objeto é destruído
5. Registro de log

*/

class Endereco {

  private $logradouro;
  private $numero;
  private $cidade;

  /* CONSTRUTOR */
  // Tudo dentro do construtor, inicia junto com a instânica da classe
  public function __construct($a, $b, $c) {
    $this->logradouro = $a;   // Parâmetros sendo atribuidos ao instanciar a classe
    $this->numero = $b;
    $this->cidade = $c;
  }

  public function getInfo() {
    print("Rua: " . "$this->logradouro" . "\n");
    print("Numero: " . "$this->numero" . "\n");
    print("Cidade: " . "$this->cidade" . "\n");
  }

  /* DESTRUIDOR */
  // Tudo dentro do destruc, é executado ao destruir o objeto da classe
  public function __destruct() {
    print("Metodo destruct - Objeto instanciado removido"."\n");
  }

}

// Instanciando a classa e passando parâmetros
$meuEndereco = new Endereco("Avenida do Sol", "93", "Vitória");
// var_dump($meuEndereco); // Imprimir o objeto todo

$meuEndereco->getInfo();

/* OUTRA MANDEIRA DE INVOCAR O DESTRUCT */

// Destruindo o objeto
unset($meuEndereco);

?>