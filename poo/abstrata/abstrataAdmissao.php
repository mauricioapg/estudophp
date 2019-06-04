</<?php 

require_once("../interface/interfaceAdmissao.php");
/*
Classe abstrata define o que os métodos fazem (a interface só diz como eles devem ser declarados).
Classe abstrata não pode ser instanciada, mas sim criada uma outra classe que herda dela.
Essa clase esta implementando os métodos da interface acima e definindo o que eles fazem.
*/
abstract class Funcionario implements Admissao //implementa a interface admissão
{
	private $nome;
	private $rg;
	private $endereco;
	private $telefone;
	private $email;
	private $nomeUsuario;
	private $senha;
	private $setor;
	private $encarregado;

	public function cadastrarFuncionario($nome, $rg, $endereco, $telefone)
	{
		$this->nome = $nome;
		$this->rg = $rg;
		$this->endereco = $endereco;
		$this->telefone = $telefone;
	}

	public function criarDadosAcesso($email, $nomeUsuario, $senha)
	{
		$this->email = $email;
		$this->nomeUsuario = $nomeUsuario;
		$this->senha = $senha;
	}

	public function definirSetor($setor, $encarregado)
	{
		$this->setor = $setor;
		$this->encarregado = $encarregado;
	}

	public function getFuncionario()
	{
		return $this->nome . "<br/>" . $this->rg . "<br/>" . $this->endereco . "<br/>" . $this->telefone;
	}

	public function getAcesso()
	{
		return $this->email . "<br/>" . $this->nomeUsuario . "<br/>" . $this->senha;
	}

	public function getSetor()
	{
		return $this->setor . "<br/>" . $this->encarregado;
	}
}

?>