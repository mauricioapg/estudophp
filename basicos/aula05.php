<?php

//PRINCIPAIS FUNÇÕES DE STRING

$frase = "Sociedade Esportiva Palmeiras é um clube fundado no ano de 1914, por imigrantes italianos, na cidade de São Paulo";

echo "<strong>Enunciado:<br></strong>" . $frase;

echo "<br>";
echo "------------------------------------------------------------------------------------------------------------------------------------------------------------";
echo "<br>";
echo "------------------------------------------------------------------------------------------------------------------------------------------------------------";
echo "<br>";

echo "<strong>Pergunta 1:<br></strong>Qual o nome do clube fundado por italianos, em 1914?";

echo "<br>";
echo "<br>";

$posicaoNomeClube = strpos($frase, "Palmeiras"); //busca a posição de determinada parte da string

$nomeClube = substr($frase, 0, $posicaoNomeClube + 9); //retorna uma determinada parte da string

echo "<strong>Resposta: </strong>" . $nomeClube;

echo "<br>";
echo "------------------------------------------------------------------------------------------------------------------------------------------------------------";
echo "<br>";

echo "<strong>Pergunta 2:<br></strong>Em que cidade foi fundada a Sociedade Esportiva Palmeiras?";

echo "<br>";
echo "<br>";

$posicaoNomeCidade = strpos($frase, "São Paulo");

$nomeCidade = substr($frase, $posicaoNomeCidade, strlen($frase)); //STRLEN conta o tamanho da string

echo "<strong>Resposta: </strong>" . $nomeCidade;

?>