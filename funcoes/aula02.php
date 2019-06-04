<?php

	//FUNÇÕES: PARÂMETROS POR VALOR X PARÂMETRO POR REFERÊNCIA
	
	$nome = "Mauricio"; //nome inicial
	$idade = 26; //idade inicial
	
	function alteraNomeIdadeValor($nome, $idade){ //PARÂMETRO POR VALOR, ou seja somente o que está dentro do escopo da função é alterado.
		$nome = "ZB2420";
		$idade = 350;
		return "<br>Nome: $nome <br>" . "Idade: $idade";
	}
		
	function alteraNomeIdadeReferencia(&$nome, &$idade){ //PARÂMETRO POR REFERÊNCIA, ou seja somente o que está dentro do escopo da função é alterado.
		$nome = "João Carlos";
		$idade = 40;
		return "<br>Nome: $nome <br>" . "Idade: $idade";
	}
		
	echo "No planeta Zumac, o nome e a idade dele são: " . alteraNomeIdadeValor($nome, $idade);
	echo "<br>";
	echo "<br>";
	echo "No planeta Terra, o nome e a idade dele são: " . alteraNomeIdadeReferencia($nome, $idade);
	echo "<br>";

?>