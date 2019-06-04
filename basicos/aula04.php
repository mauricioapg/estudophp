<?php

//OPERADORES

$operacao = $_GET["op"];

$valor = 120;

$incremento = 10;

switch($operacao){	
	case 1: $descricao = "somou " . $valor . " com " . $incremento;
	$valor += $incremento; //SOMA o valor já definido com outro valor	
	break;
	case 2: $descricao = "subtraiu " . $valor . " com " . $incremento;
	$valor -= $incremento; //SUBTRAI o valor já definido com outro valor	
	break;
	case 3: $descricao = "multiplicou " . $valor . " com " . $incremento;
	$valor *= $incremento; //MULTIPLICA o valor já definido com outro valor	
	break;
	case 4: $descricao = "dividiu " . $valor . " com " . $incremento;
	$valor /= $incremento; //DIVIDE o valor já definido com outro valor	
	break;
	case 5: $descricao = "juntou " . $valor . " e " . $incremento;
	$valor .= $incremento; //CONCATENA o valor já definido com alguma outra coisa	
	break;
	Default:
	echo "Nenhuma operação efetuada";
	echo "<br>";
	break;
}

echo "Resultado: " . $valor;
echo "<br>";
echo "(" . $descricao . ")";

?>