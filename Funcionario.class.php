<?php

require_once "Pessoa.class.php";
class Funcionario extends Pessoa{

	protected $salario;

	public function __construct($nome, $cpf, $rg, $salario ,Endereco $endereco = null)
	{
		$this->nome = $nome;
		$this->cpf = $cpf;
		$this->rg = $rg;
		$this->endereco = $endereco;
		$this->salario = $salario;
	}

}