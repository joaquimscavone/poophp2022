<?php

require_once 'Produto.class.php';

class Pagina
{
    public function render()
    {
        $produto = new Produto;
        $produto->descricao = 'Caixa Chocolate Nestle';
        $produto->setValor(12.39);
        $produto->setEstoque(30);
        $this->printProduto($produto);
        $produto->venda(5);
        // tentativa de acesso direto da erro!
        // $produto->estoque -=1;
        $this->printProduto($produto);
        
        // Produto 2
        
        $produto2 = new Produto;
        $produto2->descricao = 'Cajuzinho Nestle';
        $produto2->setValor(0.5);
        $produto2->setEstoque(15);
  
        $this->printProduto($produto2);
        $produto2->atualizarPreco(50);
        $this->printProduto($produto2);
    }

    public function printProduto(Produto $p){
        echo "<h3>{$p->descricao}</h3>";
        echo "<h5>Valor: {$p->getValor()}</h5>";
        echo "<h5>Quantidade: {$p->getEstoque()}</h5><hr>";
    }
}


$pagina = new Pagina();
$pagina->render();