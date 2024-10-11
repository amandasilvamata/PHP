<?php

$contasCorrentes = [
    12345678910 =>  [
        'titular' => 'Amanda',
        'saldo' => 1000
    ],
    12345678911 => [
        'titular' => 'Sylvia',
        'saldo' => 1500
    ],
    12345678912 => [
        'titular' => 'Marguerite',
        'saldo' => 2000
    ]
];

/*
    para cada uma das contas correntes chamando cada uma dela de conta execute:

    foreach ($contasCorrentes as $conta){
    echo $conta['titular'] . PHP_EOL;
}

*/

foreach ($contasCorrentes as $cpf => $conta){
    echo $cpf . PHP_EOL;
}

?>
