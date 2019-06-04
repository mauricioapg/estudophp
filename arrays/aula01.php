<?php
	$tabela = array(); //cria um array vazio

		array_push($tabela, array( //adiciona outro array dentro de um array
			'Time'=>'Palmeiras',
			'Pontos'=>0
		));

		array_push($tabela, array( //adiciona outro array dentro de um array
			'Time'=>'Corinthians',
			'Pontos'=>0
		));

		array_push($tabela, array( //adiciona outro array dentro de um array
			'Time'=>'Santos',
			'Pontos'=>0
		));

		array_push($tabela, array( //adiciona outro array dentro de um array
			'Time'=>'São Pauulo',
			'Pontos'=>0
		));

		print_r($tabela[0]['Time']);
		echo " ";
		print_r($tabela[0]['Pontos']);
		echo "<br>";

		print_r($tabela[1]['Time']);
		echo " ";
		print_r($tabela[1]['Pontos']);
		echo "<br>";

		print_r($tabela[2]['Time']);
		echo " ";
		print_r($tabela[2]['Pontos']);
		echo "<br>";

		print_r($tabela[3]['Time']);
		echo " ";
		print_r($tabela[3]['Pontos']);
		echo "<br>";
		echo "<br>";
?>