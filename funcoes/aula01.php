<?php
	
	/*
	A seguir a diferença entre as funções passando os parâmetros diretamente nos parênteses, e utilizando uma outra função
	para pegar os parâmetros passados dentro dela.
	*/
	
	function calcularMedia($nota1, $nota2, $nota3){ //parâmetros diretamente nos parênteses
		$soma = ($nota1 + $nota2 + $nota3) / 3;
		return $soma;
	}
	
	echo "A média do João é: " . calcularMedia(5.0, 6.3, 8.5);
	echo "<br>";
	
	//-------------------------------------------------------------------------------------------------------------------------------------
	
	function exibeSaudacao(){ //parâmetros serão passados na hora de chamar a função
		$argumentos = func_get_args(); //retorna um array com os parâmetros passados
		return $argumentos;
	}
	
	var_dump(exibeSaudacao("Good Morning my friends!"));
	echo "<br>";
	var_dump(exibeSaudacao("Bom dia meus caros!"));

?>