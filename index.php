<?php

require_once 'Produto.class.php';
require_once 'Cliente.class.php';
require_once 'Endereco.class.php';
require_once 'Venda.class.php';
require_once 'Funcionario.class.php';
require_once 'Orcamento.class.php';
require_once 'Servico.class.php';


class Pagina
{
    public function render()
    {
        $produto = new Produto('Caixa Chocolate Nestle',13,50);
        // $this->printProduto($produto);
        // $produto->venda(5);
        // tentativa de acesso direto da erro!
        // $produto->estoque -=1;
        
        
        $produto->addCaracteristica('chocolate', '50%');
        $produto->addCaracteristica('peso', '100g');
        $this->printProduto($produto);
        // $this->printPre($produto);
        // Produto 2
        $produto2 = new Produto('Cajuzinho Nestle', 0.6, 32);
        // $this->printProduto($produto2);
        // $produto2->atualizarPreco(50);
        // $this->printProduto($produto2);

        //$this->printPre($produto2);
    }


    public function venda(){
        $endereco = new Endereco('rua 1', '7777777', '12', 'centro');
        $f1 = new Funcionario('Joaquim', '11111111', '111111',5000,$endereco);
        $venda = new Venda();
        $produto = new Produto('Caixa Chocolate Nestle',13,50);
        $venda->addItem($produto);
        $venda->addItem($produto);
        $this->printPre($f1);
    }

    public function printProduto(Produto $p){
        echo "<h3>{$p->getDescricao()}</h3>";
        echo "<h5>Valor: {$p->getValor()}</h5>";
        echo "<h5>Quantidade: {$p->getEstoque()}</h5><hr>";
        foreach($p->getCaracteristicas() as $c){
            echo "<div>{$c->getNome()}: {$c->getValor()}</div>";
        }
    }

    function printPre($p){
        echo '<pre>';
        print_r($p);
        echo "</pre>";
    }
}


$pagina = new Pagina();


$o = new Orcamento;
$o->addItem(new Servico('Chave',50));
$o->addItem(new Produto('caneta',50,10));