<?php

require_once "Endereco.class.php";
class Pessoa{
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
	/**
	 * @return mixed
	 */
	function getNome() {
		return $this->nome;
	}
	
	/**
	 * @param mixed $nome 
	 * @return Pessoa
	 */
	function setNome($nome): self {
		$this->nome = $nome;
		return $this;
	}
	/**
	 * @return mixed
	 */
	function getCpf() {
		return $this->cpf;
	}
	
	/**
	 * @param mixed $cpf 
	 * @return Pessoa
	 */
	function setCpf($cpf): self {
		$this->cpf = $cpf;
		return $this;
	}
	/**
	 * @return mixed
	 */
	function getRg() {
		return $this->rg;
	}
	
	/**
	 * @param mixed $rg 
	 * @return Pessoa
	 */
	function setRg($rg): self {
		$this->rg = $rg;
		return $this;
	}
}