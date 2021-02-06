<?php

function exibeMensagem($mensagem) 
{
    echo $mensagem . '<br>';
}

$contasCorrentes = [
    '123.456.789-10' => [
    'titular' => 'Jamilly',
    'saldo' => '1000'
    ],
    '233.456.789-11' => [
    'titular' => 'Cristiane',
    'saldo' => '3000'
    ],
    '203.456.789-12' => [
    'titular' => 'Leticia',
    'saldo' => '300'
    ]
];

//if (500 > $contasCorrentes['123.456.789-10']['saldo']) {
//exibeMensagem($mensagem : "Você não pode sacar este valor");
//} else {
    //$contasCorrentes['123.456.789-10']['saldo'] -= 500;
//}

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " ".$conta['titular'] . ' ' . $conta['saldo']);
}