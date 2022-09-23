<?php

require_once "Endereco.class.php";
class Cliente{
    protected $nome;

    protected $cpf;

    protected $rg;

    protected Endereco $endereco;

    public function __construct($nome, $cpf, $rg, Endereco $endereco = null)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->rg = $rg;
        $this->endereco = $endereco;
    }

    

	/**
	 * @return Endereco
	 */
	function getEndereco(): Endereco {
		return $this->endereco;
	}
	
	/**
	 * @param Endereco $endereco 
	 * @return Cliente
	 */
	function setEndereco(Endereco $endereco): self {
		$this->endereco = $endereco;
		return $this;
	}
}