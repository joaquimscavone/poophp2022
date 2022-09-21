<?php

require_once 'Produto.class.php';

class Pagina
{
    public function render()
    {
        $produto = new Produto('Caixa Chocolate Nestle',13,50);
        $this->printProduto($produto);
        $produto->venda(5);
        // tentativa de acesso direto da erro!
        // $produto->estoque -=1;
        $this->printProduto($produto);
        
        // Produto 2
        
        $produto2 = new Produto('Cajuzinho Nestle', 0.6, 32);
        $this->printProduto($produto2);
        $produto2->atualizarPreco(50);
        $this->printProduto($produto2);
    }

    public function printProduto(Produto $p){
        echo "<h3>{$p->getDescricao()}</h3>";
        echo "<h5>Valor: {$p->getValor()}</h5>";
        echo "<h5>Quantidade: {$p->getEstoque()}</h5><hr>";
    }
}


$pagina = new Pagina();
$pagina->render();