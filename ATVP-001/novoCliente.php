<?php
	
	require_once("acesso.php");

	$nome = $_POST['nome'];
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	$sql = "INSERT INTO pacientes (nome, login, senha) VALUES ('$nome', '$usuario', '$senha')";
	$resultado = $conexao->query($sql);
	
	$sql = "SELECT id, nome FROM pacientes WHERE login = '$usuario' AND senha = '$senha'";
	$resultado = $conexao->query($sql);
	if($resultado->num_rows > 0){
		session_start();
		$_SESSION['username'] = $usuario;
		$_SESSION['system'] = 'analise';
		//echo("<script type='text/javascript'> var answer = prompt('Criado com sucesso!'); </script>");
		header('Location: index.php');
		die();
	}else{
		echo "ERROR: Tente novamenta mais tarde!";
		echo '<a href="index.php"> Voltar</a>';
	}