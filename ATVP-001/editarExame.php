<?php
	require_once("acesso.php");
	session_start();
	$id_exame = $_POST['exame'];
	$id_procedimento = $_POST['procedimento'];
	$data = $_POST['data'];
	$sql = "UPDATE exames SET procedimento_id = '$id_procedimento', data = '$data' WHERE id = '$id_exame'";
	//echo $sql;
	$resultado = $conexao->query($sql);
	if($conexao->query($sql) === TRUE){
		header('Location: index.php');
	}else{
		echo "ERROR: Tente novamenta mais tarde!";
	}