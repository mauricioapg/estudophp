<?php

function valorMenor($valorA, $valorB){
	if($valorA < $valorB){
		return $valorA;
	}
	else if($valorA > $valorB){
		return $valorB;
	}
	else{
		return "os valores são iguais";
	}
}

?>