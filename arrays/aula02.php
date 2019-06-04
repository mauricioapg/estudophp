<?php

	//TRANSFORMAR DE ARRAY PARA FORMATO JSON

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
		
		echo json_encode($tabela); //transforma os dados do Array em formato JSON
?>