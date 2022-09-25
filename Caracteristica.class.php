<?php

class Caracteristica{
    protected $nome;

    protected $valor;

    public function __construct($nome, $valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;
    }



	/**
	 * @return mixed
	 */
	function getNome() {
		return $this->nome;
	}
	/**
	 * @return mixed
	 */
	function getValor() {
		return $this->valor;
	}
}