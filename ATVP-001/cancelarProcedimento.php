<?php
	require_once("acesso.php");
	session_start();
	$id = $_POST['procedimento'];
	$sql = "DELETE FROM procedimentos WHERE id = '$id' AND NOT EXISTS(SELECT procedimento_id FROM exames WHERE exames.procedimento_id='$id')";
	$resultado = $conexao->query($sql);
	if($resultado !== FALSE){	
		header('Location: index.php');
	}else{
		echo "ERROR: Tente novamenta mais tarde!";
		echo $conexao->error;
	}