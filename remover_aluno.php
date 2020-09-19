<?php

	$RA = $_GET['RA'];
	
	include('cabecalho_conexao.php');
	
	$SQL = "DELETE FROM pessoas WHERE id=$pront";
	//echo SQL;

	include('rodape_conexao.php');
	
	header('location:cons_todos_alunos.php');
?>
