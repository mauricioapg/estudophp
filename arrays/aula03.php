<?php
	//TRANSFORMAR DE FORMATO JSON PARA ARRAY

	$json = '[
		  {
			"Time": "Palmeiras",
			"Pontos": 0
		  },
		  {
			"Time": "Corinthians",
			"Pontos": 0
		  },
		  {
			"Time": "Santos",
			"Pontos": 0
		  },
		  {
			"Time": "São Pauulo",
			"Pontos": 0
		  }
		]';
		
		$dados = json_decode($json, true); //transforma os dados do formato JSON para um Array
		var_dump($dados);

?>