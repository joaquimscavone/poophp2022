<?php

require_once 'Produto.class.php';

$produto = new Produto;
$produto->descricao = 'Caixa Chocolate Nestle';
$produto->valor = 12.39;
$produto->estoque = 30;

$produto2 = new Produto;

$produto2->descricao = 'Cajuzinho Nestle';
$produto2->valor = 0.5;
$produto2->estoque = 15;

echo '<pre>';
var_dump($produto);
var_dump($produto2);