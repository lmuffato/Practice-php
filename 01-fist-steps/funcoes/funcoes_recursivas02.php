<?php

// rodar o servidor na pasta php -S localhost:8001 // porta escolha
// php -S localhost:8001\funcoes_recursivas02.php

$hierarquia = [
  ['nome_cargo' => 'CEO',
    'subordinados' => [
      ['nome_cargo' => 'Diretor Comercial',
        'subordinados' => [
          ['nome_cargo' => 'Gerente de Vendas']   
        ]
      ],
      ['nome_cargo' => 'Diretor Financeiro',
        'subordinados' => [
          ['nome_cargo' => 'Gerente de Contas a Pagar',
            'subordinados' => [
              ['nome_cargo' => 'Supervisor de Pagamentos']
            ]
          ],
          ['nome_cargo' => 'Gerente de Compras',
            'subordinados' => [
              ['nome_cargo' => 'Supervisor de Suprimentos']
            ]
          ]
        ]
      ]
    ]
  ]
];

function exibe($cargos){

    $html = '<ul>'; // Cria uma lista

    foreach ($cargos as $cargo) { // itera sobre essa lista
        $html .= "<li>"; // A cada iteração, serão acrescentados mais itens a lista.
        $html .= $cargo[ 'nome_cargo' ];

        if (isset($cargo['subordinados']) // Se existe a propriedade subordinados.
          && count($cargo['subordinados']) > 0) { // Se a quantidade de subordinados for maior que 0.
            $html .= exibe($cargo['subordinados']); // Chama a própria função
        }
        $html .= "</li>";
    }
    $html .= "</ul>";
    return $html;
}

echo exibe($hierarquia);

?>