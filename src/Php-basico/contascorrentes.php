<?php

$conta1 = [
    'nome' => 'jamilly',
    'saldo' => '1000'
];

$conta2 = [
    'nome' => 'maria',
    'saldo' => '3000'
];
$conta3 = [
    'nome' => 'joao',
    'saldo' => '300'
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['nome'].PHP_EOL;
}

