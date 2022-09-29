<?php


abstract class Conta{
    protected $agencia;

    protected $numero;

    protected $saldo;

    public function __construct($agencia, $numero)
    {
        $this->agencia = $agencia;
        $this->numero = $numero;
        $this->saldo = 0;
    }

    
	/**
	 * @return mixed
	 */
	function getAgencia() {
		return $this->agencia;
	}
	/**
	 * @return mixed
	 */
	function getNumero() {
		return $this->numero;
	}
	/**
	 * @return mixed
	 */
	function getSaldo() {
		return $this->saldo;
	}

    function depositar($valor){
        if($valor>0){
            $this->saldo += $valor;
        }
        return $this;
    }

    function saque(float $valor){
        if($valor<=0){
            echo 'Valor inválido';
        }else if($valor>$this->saldo){
            echo 'Saldo insuficiente<br>';
        }else{
            $this->saldo -= $valor;
            echo 'Retire seu dinheiro<br>';
        }
        return $this;
    }

    abstract public function getTipoConta();
}