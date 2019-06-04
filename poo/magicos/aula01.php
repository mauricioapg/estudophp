<?php

class Aluno{

	private $nome;
	private $RA;
	private $idade;
	private $curso;
	private $turma;

	//método construtor inicia os atributos com valores padrão
	public function __construct($valorNome, $valorRA, $valorIdade, $valorCurso, $valorTurma){
		$this->nome = $valorNome;
		$this->RA = $valorRA;
		$this->idade = $valorIdade;
		$this->curso = $valorCurso;
		$this->turma = $valorTurma;
	}

	//método mágico que serializa os atributos, transformando em string para serem exibidos.
	public function __toString(){
		return "Nome: " . $this->nome . "<br/>" . "RA: " . $this->RA . "<br/>" . "Idade: " . $this->idade . "<br/>" . "Curso: " . $this->curso . "<br/>" . "Turma: " . $this->turma . "<br/>";
	}
}

$aluno = new Aluno("Ademar Barbosa de Lima", "456723Y", 32, "Análise e Desenvolvimento de Sistemas", "B");

echo $aluno; //quando se tem o método toString(), basta dar um echo direto no objeto para exibir seus atributos.

?>