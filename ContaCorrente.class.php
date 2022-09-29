<?php

require_once "Conta.class.php";
class ContaCorrente extends Conta{
    protected $limite;

    public function __construct($agencia, $numero, $limite)
    {
        $this->limite = $limite;
        parent::__construct($agencia, $numero);
    }


    final public function saque(float $valor){
        if($valor<=0){
            echo 'Valor Inválido';
        }else if($valor<$this->saldo+$this->limite){
            $this->saldo -= $valor;
            echo 'Retire seu dinheiro<br>';
        }else{
            echo 'Saldo insuficiente<br>';
        }
        return $this;
    }

    public function getTipoConta()
    {
        return 'Conta Corrente';
    }

   
}