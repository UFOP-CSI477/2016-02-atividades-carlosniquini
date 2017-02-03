<?php
	require_once("acesso.php");
	session_start();
	$id_procedimento = $_POST['procedimento'];
	$preco = $_POST['preco'];
	$nome = $_POST['nome'];
	if($_SESSION['type'] == 1){
		$sql = "UPDATE procedimentos SET nome = '$nome', preco = '$preco' WHERE id = '$id_procedimento'";
	}else{
		$sql = "UPDATE procedimentos SET preco = '$preco' WHERE id = '$id_procedimento'";
	}
	//echo $sql;
	$resultado = $conexao->query($sql);
	if($conexao->query($sql) === TRUE){
		header('Location: index.php');
	}else{
		echo "ERROR: Tente novamenta mais tarde!";
	}