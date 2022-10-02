<?php

require_once "Service.interface.php";

class Servico implements Service{
    protected $descricao;

    protected $valor;

    public function __construct($descricao, $valor)
    {
        $this->descricao = $descricao;
        $this->valor = $valor;
    }

    
	/**
	 *
	 * @return mixed
	 */
	function getPreco() {
        return $this->valor;
	}
	
	/**
	 *
	 * @return mixed
	 */
	function getDescricao() {
        return $this->descricao;
	}

}