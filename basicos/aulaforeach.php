
<h3>Dados do cliente</h3>

<form>
	<table>
		<tr>
			<td>
				<label>Nome: </label>
			</td>
			<td>
				<input type="text" name="nome">
			</td>			
		</tr>
		<tr>
			<td>
				<label>Telefone: </label>
			</td>
			<td>
				<input type="text" name="telefone">
			</td>			
		</tr>
		<tr>
			<td>
				<label>E-mail: </label>
			</td>
			<td>
				<input type="text" name="email">
			</td>			
		</tr>
		<tr>
			<td>				
			</td>
			<td>
				<input type="submit" value="Enviar">
			</td>			
		</tr>
	</table>
</form>

<?php

	foreach($_GET as $chave => $value){ //percorrendo tudo aquilo que é enviado pelo GET do formulário
		echo "<b>";
		echo $chave . ": " . $value . "<br>";
	}

?>
