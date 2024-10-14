<?php
echo "Olá, arquivo de funções aqui!\n";

// tipagem dos dados, depois dos dois pontos está indicando o tipo que será retornado pela função
function sacar(array $conta, float $valorAsacar): array
{
    
    if ($valorAsacar > $conta ['saldo']){
        exibeMensagem("Você não pode sacar este valor");
    }else{
        $conta['saldo'] -=  $valorAsacar;
    }
    return $conta;
}

function exibeMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}

function depositar(array $conta, float $valorADepositar) : array
{
    if ($valorADepositar > 0) {
        $conta ['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depositos precisam serpositivos");
    }
    return $conta;
}

?>
