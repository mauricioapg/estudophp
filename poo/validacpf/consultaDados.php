<form>
	<table>
		<tr>
			<td>
				<label>Digite seu CPF: </label>
			</td>
			<td>
				<input type="text" name="cpf">
			</td>
			<td>
				<input type="submit" value="Validar">
			</td>
		</tr>
	</table>
</form>


<?php

require_once("aula01.php");

$cpf = new Documento();
$retorno = $cpf->setNumero($_GET['cpf']);

?>

