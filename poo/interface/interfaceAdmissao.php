<?php

interface Admissao
{
	/*
	Métodos da interface são obrigatórios de serem declarados nas classes
	que implementarão da forma que estão descritos aqui.
	*/
	public function cadastrarFuncionario($nome, $rg, $endereco, $telefone);
	public function criarDadosAcesso($email, $nomeUsuario, $senha);
	public function definirSetor($setor, $encarregado);
}

?>