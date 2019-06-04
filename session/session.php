<?php

	require_once("define_session.php"); //chama o arquivo que cria a sessão
	
	echo "INFORMAÇÕES DA SESSÃO";
	
	echo "<br>";
	echo "<br>";
	
	echo "Nome da sessão: " . session_cache_expire();
	
	echo "<br>";
	echo "<br>";
	
	switch(session_status()){
		case PHP_SESSION_DISABLED:
			echo "Sessões desabilitadas";
			break;
		case PHP_SESSION_NONE:
			echo "Não exitem sessões criadas";
			break;
		case PHP_SESSION_ACTIVE:
			echo "Valor da sessão: " . $_SESSION['USUARIO'];
			break;
		Default:
			echo "...";
			break;
	}	
	
	echo "<br>";
	echo "<br>";
	
	echo "Local da sessão: " . session_save_path();
	
	
	
?>