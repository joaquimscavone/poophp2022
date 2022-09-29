<?php


require_once "Pessoa.class.php";
require_once "Cliente.class.php";
require_once "Funcionario.class.php";
require_once "Produto.class.php";

$var = new Cliente('Joaquim', '1', '1', new Endereco('av das carmelhas', '1111111', '11', 'centro')    );

echo '<pre>';
print_r($var->getNome());
testePessoa($var);

function testePessoa(Pessoa $p){

}