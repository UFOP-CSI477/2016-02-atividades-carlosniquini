<?php
	require_once("acesso.php");
	session_start();
	$id = $_POST['exame'];
	$sql = "DELETE FROM exames WHERE id = '$id'";
	//echo $sql;
	$resultado = $conexao->query($sql);
	if($conexao->query($sql) === TRUE){
		header('Location: index.php');
	}else{
		echo "ERROR: Tente novamenta mais tarde!";
	}