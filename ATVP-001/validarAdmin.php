<?php

	require_once("acesso.php");

	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	$sql = "SELECT id, nome, tipo FROM usuarios WHERE login = '$usuario' AND senha = '$senha'";
	$resultado = $conexao->query($sql);
	//echo $resultado;
	if($resultado->num_rows > 0){
		$row = $resultado->fetch_assoc();
		$id = $row["id"];
		$type = $row["tipo"];
		session_start();
		$_SESSION['username'] = $usuario;
		$_SESSION['id'] = $id;
		$_SESSION['type'] = $type;
		$_SESSION['system'] = 'analise';
		header('Location: index.php');
		die();
	}
	else{
		echo "ERROR: Usuário e/ou senha inválidos!";
		echo '<a href="login.php"> Voltar</a>';
	}