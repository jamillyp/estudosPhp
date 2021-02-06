<?php

require_once 'src/Titular.php';
require_once 'src/Pessoa.php';

class Cpf 
{
    private $cpf;

    public function __construct(string $cpf)
    {
        $this->cpf = $cpf;
    }

    //function validaCpf()
    //{
        
    //}

    public function recuperaNumero() : string
    {
        return $this->cpf;
    }
}

