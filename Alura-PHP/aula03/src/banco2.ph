<?php

// inclue o arquivo funções
//include 'funcoes.php';

// require, diferente do include não executa o código caso não encontre o arquivo
// o require once requere apenas uma vez e se for solicitado novamente não dará erro
require_once 'funcoes.php';

$contasCorrentes = [
    12345678910 =>  [
        'titular' => 'Amanda',
        'saldo' => 1000
    ],
    12345678911 => [
        'titular' => 'Sylvia',
        'saldo' => 150
    ],
    12345678912 => [
        'titular' => 'Marguerite',
        'saldo' => 2000
    ]
];


$contasCorrentes['12345678910'] = sacar(
    $contasCorrentes['12345678910'], 500
);

$contasCorrentes['12345678910'] = depositar(
    $contasCorrentes['12345678910'], 500
);


foreach ($contasCorrentes as $cpf => $conta) {
    list ('titular' => $titular, 'saldo' => $saldo) = $conta;
    exibeMensagem(
        "$cpf $titular $saldo"
    );
}




?>
