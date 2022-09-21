<?php


class Produto{
    public $descricao;
    private $valor;
    protected $estoque = 0;

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
}