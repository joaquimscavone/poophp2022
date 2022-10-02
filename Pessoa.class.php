<?php

require_once "Endereco.class.php";
class Pessoa{
    private $nome;

    protected $cpf;

    protected $rg;

	const CODIGO = 'P';

	public static $logado;

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

	static function validarCPF($cpf){
		    // Extrai somente os números
			$cpf = preg_replace( '/[^0-9]/is', '', $cpf );
     
			// Verifica se foi informado todos os digitos corretamente
			if (strlen($cpf) != 11) {
				return false;
			}
		
			// Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
			if (preg_match('/(\d)\1{10}/', $cpf)) {
				return false;
			}
		
			// Faz o calculo para validar o CPF
			for ($t = 9; $t < 11; $t++) {
				for ($d = 0, $c = 0; $c < $t; $c++) {
					$d += $cpf[$c] * (($t + 1) - $c);
				}
				$d = ((10 * $d) % 11) % 10;
				if ($cpf[$c] != $d) {
					return false;
				}
			}
			return true;
	}
}