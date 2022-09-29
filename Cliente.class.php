<?php

require_once "Pessoa.class.php";
class Cliente extends Pessoa{
	protected $codcliente;
	
	/**
	 * @return mixed
	 */
	function getCodcliente() {
		return $this->codcliente;
	}
	
	/**
	 * @param mixed $codcliente 
	 * @return Cliente
	 */
	function setCodcliente($codcliente): self {
		$this->codcliente = $codcliente;
		return $this;
	}
}