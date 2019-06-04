<?php

require_once("interfaceAdmissao.php");
/*
Classe que implementa a interface criada
Os métodos são declarados da forma forma como foram definidos na interface
Posso criar outras variáveis e métodos normalmente, mas ao menos estes, devem estar presentes
*/
class Funcionario implements Admissao
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

$enfermeira = new Funcionario();
$enfermeira->cadastrarFuncionario("Neusa Batista Soares", "45567876-1", "Rua dos Autores, 1505", 23568744);
$enfermeira->criarDadosAcesso("neusa.batista@empresa.com.br", "neusa.batista", "AbC123456");
$enfermeira->definirSetor("Enfermaria", "Simone");

$tecnicaEnfermagem = new Funcionario();
$tecnicaEnfermagem->cadastrarFuncionario("Andréia Mendes", "46689533-0", "Alameda das Viúvas, 10", 87654421);
$tecnicaEnfermagem->criarDadosAcesso("andreia.mendes@empresa.com.br", "andreia.mendes", "Xy4Z789_b");
$tecnicaEnfermagem->definirSetor("Enfermaria", "Simone");

echo "<br/>";
echo $enfermeira->getFuncionario();
echo "<br/>";
echo "<br/>";
echo $enfermeira->getAcesso();
echo "<br/>";
echo "<br/>";
echo $enfermeira->getSetor();
echo "<br/>";
echo "-------------------------------------------------------------------------------------------------------------------------------------";
echo "<br/>";
echo "-------------------------------------------------------------------------------------------------------------------------------------";
echo "<br/>";
echo $tecnicaEnfermagem->getFuncionario();
echo "<br/>";
echo "<br/>";
echo $tecnicaEnfermagem->getAcesso();
echo "<br/>";
echo "<br/>";
echo $tecnicaEnfermagem->getSetor();

?>