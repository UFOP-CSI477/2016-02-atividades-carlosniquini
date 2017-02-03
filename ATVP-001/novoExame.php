<?php
	require_once("acesso.php");
	session_start();
	$procedimento = $_POST['procedimento'];
	$paciente = $_SESSION['id'];
	$data = $_POST['data'];
	$sql = "INSERT INTO exames (paciente_id, procedimento_id, data) VALUES ('$paciente', '$procedimento', '$data')";
	// echo $sql;
	//$resultado = $conexao->query($sql);
	if($conexao->query($sql) === TRUE){
		header('Location: index.php');
	}else{
		echo "ERROR: Tente novamenta mais tarde!";
	}
	// if($resultado->num_rows > 0){
		// session_start();
		// $_SESSION['username'] = $usuario;
		// $_SESSION['system'] = 'analise';
		// echo("<script type='text/javascript'> var answer = prompt('Criado com sucesso!'); </script>");
		// header('Location: index.php');
		// die();
	// }else{
		// echo "ERROR: Tente novamenta mais tarde!";
		// echo '<a href="index.php"> Voltar</a>';
	// }