<?php

$obj = new stdClass;
$obj->nome = 'Joaquim';
$obj->idade = '99';
$obj->sexo = 'M';

$obj = (array) $obj;

$array = [
    'nome' => 'Miriam',
    'idade' => 65,
    'sexo' => 'F'
];

$obj2 = (object) $array;

$obj3 = (object)$_GET;


echo '<pre>';
print_r($obj);
print_r($obj2);
print_r($obj3);
