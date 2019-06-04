<?php

class Produto{

	private $descricao;
	private $valor;
	private $cor;

	public function getDescricao(){
		return $this->descricao;
	}

	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}

	public function getValor():float{ //cast do valor para de string para float
		return $this->valor;
	}

	public function setValor($valor){
		$this->valor = $valor;
	}

	public function getCor(){
		return $this->cor;
	}

	public function setCor($cor){
		$this->cor = $cor;
	}

	public function exibeDados(){
		return array(
			"descricao"=>$this->getDescricao(),
			"valor"=>$this->getValor(),
			"cor"=>$this->getCor(),
		);
	}
}

$camiseta = new Produto();
$camiseta->setDescricao("Camiseta lisa de algodão");
$camiseta->setValor("39.90");
$camiseta->setCor("Azul");

//var_dump($camiseta->exibeDados());

echo json_encode($camiseta->exibeDados()); //transforma os dados para formato json

?>