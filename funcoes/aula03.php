<?php

	function exibeSoma(int ...$numeros){ //os tres pontos indicam que podem ser vários parametros
		return array_sum($numeros);
	}
	
	echo "Números: " . exibeSoma(1,2,5,9,8);

?>