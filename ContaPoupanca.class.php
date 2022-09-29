<?php

require_once "Conta.class.php";
class ContaPoupanca extends Conta{
    protected $rendimento;

    public function __construct($agencia, $numero, $rendimento)
    {
        $this->rendimento = $rendimento;
        parent::__construct($agencia, $numero);
    }


    public function calcularRendiemntos(){
        $this->saldo += $this->saldo * $this->rendimento/100;
    }

    public function getTipoConta()
    {
        return 'Conta Poupança';
    }
   
}