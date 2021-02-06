<?php

$contasCorrentes = [
    1 => [
    'titular' => 'Jamilly',
    'saldo' => '1000'
    ],
    2 => [
    'titular' => 'Cristiane',
    'saldo' => '3000'
    ],
    3 => [
    'titular' => 'Leticia',
    'saldo' => '300'
    ]
];

foreach ($contasCorrentes as $indice => $conta) {
    echo $conta['titular'].PHP_EOL;
}