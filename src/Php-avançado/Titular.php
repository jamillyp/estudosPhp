<?php

require_once 'src/Conta.php';
require_once 'src/Cpf.php';
require_once 'src/Endereco.php';

class Titular extends Pessoa
{
    private $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco() : Endereco 
    {
        return $this->endereco;
    }

}