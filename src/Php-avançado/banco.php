<?php

require_once 'src/Pessoa.php';
require_once 'src/Cpf.php';
require_once 'src/Endereco.php';
require_once 'src/Titular.php';
require_once 'src/Conta.php';

$endereco = new Endereco('Quixadá', 'Centro', 'Rua autran moreno', '127');
echo $endereco;
//$cpfJam = new Cpf('123.456.789-10');
//$jamilly = new Pessoa('Jamilly', $cpfJam);
//$titular = new Titular($jamilly, $endereco);

//$primeiraConta = new Conta($jamilly);
//var_dump($primeiraConta);

//echo Conta::$numeroDeContas . PHP_EOL;

