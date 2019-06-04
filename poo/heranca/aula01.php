<?php

 class Funcionario
 {
 	private $nome;
 	private $salario;
 	private $setor;

 	public function getNome()
 	{
 		return $this->nome;
 	}

 	public function setNome($nome)
 	{
 		$this->nome = $nome;
 	}

 	public function getSalario():float
 	{
 		return $this->salario;
 	}

 	public function setSalario($salario)
 	{
 		$this->salario = $salario;
 	}

 	public function getSetor()
 	{
 		return $this->setor;
 	}

 	public function setSetor($setor)
 	{
 		$this->setor = $setor;
 	}
 }

 class Func_Adm extends Funcionario //Classe filha da Funcionário (herda os métodos, mas não diretamente os atributos private)
 {
 	private $encarregado;

 	public function getEncarregado()
 	{
 		return $this->encarregado;
 	}

 	public function setEncarregado($chefe)
 	{
 		return $this->encarregado = $chefe;
 	}

 	public function defineTaxaSindicato():float
 	{ 		
 		if($this->getSalario() > 3000) //método getSalario() pertence a classe pai
 		{
 			$taxaFinal = ($this->getSalario() / 100) * 15;	
 		}
 		else
 		{
 			$taxaFinal = ($this->getSalario() / 100) * 5;	
 		} 		

 		return $taxaFinal;
 	}
 }

 $analistaRH = new Func_Adm();
 $analistaRH->setNome("Andréa Lopes Fonseca");
 $analistaRH->setSalario(3670);
 $analistaRH->setSetor("Administração");
 $analistaRH->setEncarregado("Ana Lamparelli Brandão Pereira");

 echo "Nome: " . $analistaRH->getNome();
 echo "<br/>";
 echo "Salário: " . $analistaRH->getSalario();
 echo "<br/>";
 echo "Setor: " . $analistaRH->getSetor();
 echo "<br/>";
 echo "Chefe: " . $analistaRH->getEncarregado();
 echo "<br/>";
 echo "Taxa de sindicato: " . $analistaRH->defineTaxaSindicato();
?>