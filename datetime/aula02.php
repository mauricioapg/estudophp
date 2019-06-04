<?php

//DATETIME

$dt = new DateTime();//cria o objeto

echo "Data atual: " . $dt->format("d/m/Y");

echo "<br>";

$intervalo = new DateInterval("P2M"); //adiciona 2 meses

$dt->add($intervalo);

echo "Faltará 10 dias para o casamento em: " . $dt->format("d/m/Y");;

?>