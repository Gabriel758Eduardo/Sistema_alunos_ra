<?php
	$nome = "";
	$endereco = "";
	$idade = "";
	
	$pront = $_GET['pront'];
	
	include('cabecalho_conexao.php');
	
	$SQL = "SELECT * FROM pessoas WHERE id = $pront";
	
	$consulta = mysqli_query($con, $SQL);
	
	if($consulta) {
		if(mysqli_num_rows($consulta) == 1) {
			$registro = mysqli_fetch_assoc($consulta);
			$nome = $registro['nome'];
			$idade = $registro['idade'];
			$endereco = $registro['endereco'];
		} else {
			echo "ERRO: Consulta retornou varios prontuarios<br>";
		}
	} else {
		echo "ERRO: SQL incorreta<br/>";
	}
	
	mysqli_close($con);
	
	include("cabecalho.inc.php");
?>

	<form action="edita.php" method="POST">
		<label>Nome:</label>
		<input type="text" name="nome" value="<?php echo $nome ?>"/>
		<br>
		
		<label>Endereço:</label>
		<input type="text" name="endereco" value="<?php echo $endereco ?>"/>
		<br>
		
		<label>Idade:</label>
		<input type="number" name="idade" value="<?php echo $idade ?>"/>
		<br>
		
		<input type="hidden" name="pront" value="<?php echo $pront ?>" />
		
		<input type="submit" value="Atualizar" />
	</form>
		
<?php
	include("rodape.inc.php");
?>