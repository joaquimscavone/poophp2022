<?php

require_once "Pessoa.class.php";
class Funcionario extends Pessoa{

	protected $salario;

	public function __construct($nome, $cpf, $rg, $salario ,Endereco $endereco = null)
	{
		parent::__construct($nome, $cpf, $rg, $endereco);
		$this->salario = $salario;
	}

}