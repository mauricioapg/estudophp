<?php

	$nome = "Mauricio Aparecido Gabriel";
	
	function exibeNome (){
		global $nome; //significa que estou dizendo que quero usar a variável criada fora da função.
		echo $nome;
	}
	
	exibeNome();
?>