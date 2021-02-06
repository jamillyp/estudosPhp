<?php

require_once 'src/Cpf.php';
require_once 'src/Titular.php';
require_once 'src/Funcionario.php';

class Pessoa
{
    protected $nome;

    public function __construct(string $nome, Cpf $cpf)
    {
        parent::__construct($cpf);
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    protected function validaNome(string $nome)
    {
        if (strlen($nome) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}