<?php

require_once "Cliente.class.php";
require_once "Produto.class.php";

class Venda{
    protected  $cliente;
    protected $itens;

    public function __construct(Cliente $cliente = null)
    {
        $this->cliente = $cliente;
        $this->itens = [];
    }



    function addItem(Produto $produto){
        $this->itens[] = $produto;
    }



    /**
     * @return Produtos[];
     */
	function getItens():array {
		return $this->itens;
	}
}