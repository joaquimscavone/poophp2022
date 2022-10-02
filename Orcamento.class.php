<?php

require_once 'Service.interface.php';
class Orcamento{

    protected array $itens;

    public function __construct()
    {
        $this->itens = [];
    }

    public function addItem(Service $item){

    }
}