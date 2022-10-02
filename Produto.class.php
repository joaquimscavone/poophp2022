<?php

require_once 'Caracteristica.class.php';
require_once 'Service.interface.php';

class Produto implements Service{
    private $descricao;
    private $valor;
    protected $estoque;
    protected array $caracteristicas;


    /**
     * Esta classe gerencia os produtos do meu sistema
     * @param String $descricao nome do produto
     * @param float $valor valor inicial do meu produto;
     * @param int $estoque quantidade inicial do meu estoque;
     */
    function __construct($descricao, $valor, $estoque = 0)
    {
        $this->descricao = $descricao;
        $this->valor = $valor;
        $this->estoque = $estoque;
        $this->caracteristicas = [];
    }

    function __destruct()
    {
        echo "<script>console.log('apagou o objeto {$this->descricao}')</script>";
    }

    public function setEstoque($quantidade){
        $this->estoque +=$quantidade;
    }

    public function getEstoque()
    {
        return $this->estoque;
    }
    /**
     * Registra a venda de um produto;
     * @param int $quantidade quantidade do produto que foi vendido
     * @return void
     */
    public function venda($quantidade){
        $this->estoque -=$quantidade;
    }

    /**
     * Atualiza o preço com base em um percentual
     * @param float $percentual percentual que se deseja valorizar
     *  ex: 55.5 para 55,5% de reajuste;
     */
    public function atualizarPreco($percentual){
       $this->valor += $this->valor*$percentual/100;
    }

   
	/**
     * retorna o valor do produto;
	 * @return float
	 */
	function getValor() {
		return $this->valor;
	}
	/**
	 * @param mixed $valor 
	 * @return Produto
	 */
	function setValor($valor): self {
		$this->valor = $valor;
		return $this;
	}
	/**
	 * @return mixed
	 */
	function getDescricao() {
		return $this->descricao;
	}
	/**
	 * @return Caracteristica[]
	 */
	function getCaracteristicas(): array {
		return $this->caracteristicas;
	}

    function addCaracteristica($nome, $valor){
        $this->caracteristicas[] = new Caracteristica($nome, $valor);
    }

    public function getPreco()
    {
        return $this->valor;
    }
    
}