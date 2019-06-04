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

$tecnicoInformatica = new Funcionario();
$tecnicoInformatica->cadastrarFuncionario("Mauricio Aparecido Gabriel", "48161544-1", "Travessa Ponte Alta do Norte, 05", 20525681);
$tecnicoInformatica->criarDadosAcesso("mauricio.gabriel@empresa.com.br", "mauricio.gabriel", "Yuba7479");
$tecnicoInformatica->definirSetor("TI", "Reginaldo");

echo "<br/>";
echo $tecnicoInformatica->getFuncionario();
echo "<br/>";
echo "<br/>";
echo $tecnicoInformatica->getAcesso();
echo "<br/>";
echo "<br/>";
echo $tecnicoInformatica->getSetor();

?>