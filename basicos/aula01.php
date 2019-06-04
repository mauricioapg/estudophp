<?php

	$aluno = $_GET["aluno"]; //obtém o valor vindo da QueryString
	$nota1 = 9.5;
	$nota2 = 5.0;
	$nota3 = 4.3;	
	$media = ($nota1 + $nota2 + $nota3) / 3;
	
	echo "Aluno: " . $aluno . "<br/>";
	echo "Nota 1: " . $nota1 . "<br/>";
	echo "Nota 2: " . $nota2 . "<br/>";
	echo "Nota 3: " . $nota3 . "<br/>";
	echo "<strong>Média:" . $media . "<br/></strong>";
	echo "<br/>";
	//------------------------------------------------------------------//	
	/*	
	unset($aluno);
	echo "<strong>Após eliminar variável 'Aluno':" . "<br/></strong>";
	if(isset($aluno)){
		echo var_dump($aluno);	
	}
	else{
		echo "Não há nome de aluno";
	}
	*/
?>