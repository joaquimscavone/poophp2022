<?php



class Endereco{
    private $logradouro;

    private $cep;

    private $numero;

    private $bairro;

    public function __construct($logradouro, $cep, $numero, $bairro)
    {
        $this->logradouro = $logradouro;
        $this->cep = $cep;
        $this->numero = $numero;
        $this->bairro = $bairro;
    }


}