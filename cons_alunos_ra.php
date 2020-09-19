<?php
	include('cabecalho.inc.php');
?>

	<form action="consulta_ra.php" method="POST">
		<label>RA:</label>
		<input type="number" name="RA" />
		<br>
		
		<input type="submit" value="Consultar" />
	</form>
<?php
	include('rodape.inc.php');
?>