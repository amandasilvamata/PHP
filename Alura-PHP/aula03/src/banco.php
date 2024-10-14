<?php

function exibeMensagem($mensagem){
    echo $mensagem . PHP_EOL;
}

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

// pegar do saldo da conta corrente com esse cpf terá 500 a menos

$contasCorrentes['12345678910']['saldo'] -= 500;

if (500 > $contasCorrentes['12345678911'] ['saldo']){
    exibeMensagem("Você não pode sacar este valor");
}else{
    $contasCorrentes['12345678911']['saldo'] -= 500;
}

foreach ($contasCorrentes as $cpf => $conta){
    exibeMensagem($cpf . " " . $conta['titular'] . " " . $conta['saldo']);
}

?>
