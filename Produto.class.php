<?php


class Produto{
    public $descricao;
    public $valor;
    public $estoque;

    public function addEstoque($quantidade){
        $this->estoque +=$quantidade;
    }

    public function venda($quantidade){
        $this->estoque -=$quantidade;
    }

    public function atualizarPreco($percentual){
       $this->valor += $this->valor*$percentual/100;
    }
}