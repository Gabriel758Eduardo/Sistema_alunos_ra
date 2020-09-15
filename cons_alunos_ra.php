<?php
	include('cabecalho.inc.php');
?>

	<form action="consulta_ra.php" method="POST">
		<label>Prontuário:</label>
		<input type="number" name="prontuario" />
		<br>
		
		<input type="submit" value="Consultar" />
	</form>
<?php
	include('rodape.inc.php');
?>