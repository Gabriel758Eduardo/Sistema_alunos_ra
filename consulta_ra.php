<?php

	include('cabecalho_conexao.php');
	
	$RA = $_POST['RA'];
	
	$SQL = "SELECT * FROM pessoas WHERE id=$ra";
	
	$consulta = mysqli_query($con, $SQL);
	
	if($consulta) {
		if(mysqli_num_rows($consulta) > 0) {
			while (($resultado = mysqli_fetch_assoc($consulta))  != null) {
				
				echo $resultado['nome'] . " - " . $resultado['endereco'] . " - " . $resultado['idade'] . "<br>";
			}	
		} else {
			echo "Usuário não existe na sua base de dados<br>";
		}
	} else {
		echo "Problema de sintaxe SQL";
		echo mysqli_error($con);
	}
	
	mysqli_close($con);
	echo "<a href='menu.php'>Voltar</a>";
?>