<?php


class Cliente{
    protected $nome;

    protected $cpf;

    protected $rg;

    public function __construct($nome, $cpf, $rg)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->rg = $rg;
    }


}