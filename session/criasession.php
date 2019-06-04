<?php

	session_start();
	$_SESSION['USUARIO'] = $_GET["nome"];
	echo "Nova sessão criada em: " . date('d/m/y');

?>