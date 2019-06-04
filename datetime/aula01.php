<?php

require_once("localebrasil.php");

$tempo = strtotime("1992-05-24"); //obtém o time stamp exato do momento

echo "TimeStamp dia de nascimento: " . $tempo;

$dataNascimento = date("d/m/Y", $tempo);

echo "<br>";

echo "Mauricio Aparecido Gabriel nasceu em " . $dataNascimento;

echo "<br>";

$tempoAtual = strtotime("now");

$dataAtual = date("d/m/Y", $tempoAtual);

$horaAtual = strtotime("now");

$diaAtual = ucwords(strftime("%A"));

echo "Hoje é " . $diaAtual . ", " . $dataAtual;

echo "<br>";

echo "Agora são " . date("H:i:s", $horaAtual);	

?>