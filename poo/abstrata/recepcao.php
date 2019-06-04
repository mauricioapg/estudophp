<?php

require_once("abstrataAdmissao.php");

class Recepcao extends Funcionario //implementa a classe abstrata funcionário, que implementa a interface admissão
{

}

$recepcionista = new Recepcao(); //instancio a classe que herdou da abstrata
$recepcionista->criarDadosAcesso("raquel.vieira@empresa.com.br", "raquel.vieira", "Drj_126");

echo $recepcionista->getAcesso();

?>