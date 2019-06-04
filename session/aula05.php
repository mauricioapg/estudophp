<?php

require_once("aula04.php");

session_destroy(); //destrói a sessão
$_SESSION = array(); //limpa os dados da sessão


echo "<br>";
echo $_SESSION['USUARIO'];

?>