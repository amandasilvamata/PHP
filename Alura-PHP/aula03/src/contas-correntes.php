<?php

// array associativo
$conta1 = [
    'titular' => 'Amanda',
    'saldo' => 1000
];
$conta2 = [
    'titular' => 'Sylvia',
    'saldo' => 1500
];
$conta3 = [
    'titular' => 'Marguerite',
    'saldo' => 2000
];

echo $conta2['titular'] . PHP_EOL;

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i] ['titular'] . PHP_EOL;
}

?>
