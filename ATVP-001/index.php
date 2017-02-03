<!DOCTYPE html>
<?php session_start(); ?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sistema de Controle de Solicitações de Análises Laboratoriais</title>
		<script src="JS/jquery.min.js"></script>
		<script src="JS/bootstrap.min.js"></script>
		<link rel="stylesheet" href="CSS/bootstrap.css">
	</head>
	<body>
		<h3 style="background-color: #555; color: white; padding: 30px; height: 90px;"><center>Sistema de Controle de Solicitações de Análises Laboratoriais</center></h3>
		<div class="container">
			
			<br><br>
			<ul class="nav nav-pills nav-justified">
				<li class="active"><a data-toggle="tab" href="#home">Geral</a></li>
				<li><a data-toggle="tab" href="#paciente">Área do Paciente</a></li>
				<li><a data-toggle="tab" href="#admin">Área Administrativa</a></li>
				<!-- <li><a data-toggle="tab" href="#contato">Contato</a></li> -->
				
			</ul>
			<div class="tab-content">
				<div id="home" class="tab-pane fade in active">
					<h3><center>Procedimentos</center></h3><br>
					<div class="col-sm-2 sidenav">
						<!-- <p><a href="#">Link</a></p>
						<p><a href="#">Link</a></p>
						<p><a href="#">Link</a></p> -->
					</div>
					<div class="col-sm-8">
						<center>
						<?php
							require_once("acesso.php");
							if(!empty($conexao)){
								require("modelProcedimentos.php");
								require("listaProcedimentos.php");
							}else{
								echo "Falha de Conexão com o Banco de Dados!";
							}
						?>
						</center>
					</div>
				</div>
				<div id="paciente" class="tab-pane fade">
					<h3><center>Área do Paciente</center></h3><br>
					<div class="container">
						<div class="col-sm-2 sidenav">
							<ul class="nav nav-pills nav-stacked">
								<li class="active"><a data-toggle="tab" href="#login">Login</a></li>
								<li><a data-toggle="tab" href="#novo">Novo Usúario</a></li>
								<li><a data-toggle="tab" href="#solicitar">Solicitar Exame</a></li>
								<li><a data-toggle="tab" href="#cancelar">Cancelar Solicitação</a></li>
								<li><a data-toggle="tab" href="#editar">Editar Solicitação</a></li>
								<li><a data-toggle="tab" href="#solicitados">Exames Solicitados</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div id="login" class="col-sm-8 tab-pane fade in active">
								<?php 
									//session_start();
									if(isset($_SESSION['username'])){
										if($_SESSION['type'] == 1 or $_SESSION['type'] == 2){
											require("avisoPermissao.php");
										}else{
											require("logado.php");
										}
									}else{
										require("login.php");
									}
								?>
							</div>
							<div id="novo" class="col-sm-8 tab-pane fade">
								<form action="novoCliente.php" method="post">
									<table class="table">
										<tr><td style="float: right;">Nome:</td> <td><input type="text" name="nome"></td></tr>
										<tr><td style="float: right;">Email:</td> <td><input type="text" name="email"></td></tr>
										<tr><td style="float: right;">CPF:</td> <td> <input type="text" name="cpf"></td></tr>
										<tr><td style="float: right;">Usúario:</td> <td> <input type="text" name="usuario"></td></tr>
										<tr><td style="float: right;">Senha:</td> <td> <input type="password" name="senha"></td></tr>
									</table>
									<div style="float: right;">
									<input class="btn btn-warning" type="reset" value="Limpar"> <input class="btn btn-success" type="submit" value="Criar"> 
									</div>
								</form>
							</div>
							<div id="solicitar" class="col-sm-8 tab-pane fade">
								<?php 
									//session_start();
									if(isset($_SESSION['username'])){
										if($_SESSION['type'] == 1 or $_SESSION['type'] == 2){
											require("avisoPermissao.php");
										}else{
											require("solicitar.php");
										}
									}else{
										require("aviso.php");
									}
								?>
							</div>
							<div id="cancelar" class="col-sm-8 tab-pane fade">
								<?php 
									//session_start();
									if(isset($_SESSION['username'])){
										if($_SESSION['type'] == 1 or $_SESSION['type'] == 2){
											require("avisoPermissao.php");
										}else{
											require("cancelar.php");
										}
									}else{
										require("aviso.php");
									}
								?>
							</div>
							<div id="editar" class="col-sm-8 tab-pane fade">
								<?php 
									//session_start();
									if(isset($_SESSION['username'])){
										if($_SESSION['type'] == 1 or $_SESSION['type'] == 2){
											require("avisoPermissao.php");
										}else{
											require("editar.php");
										}
									}else{
										require("aviso.php");
									}
								?>
							</div>
							<div id="solicitados" class="col-sm-8 tab-pane fade">
								<?php 
									//session_start();
									if(isset($_SESSION['username'])){
										?><center>
										<?php
										if($_SESSION['type'] == 1 or $_SESSION['type'] == 2){
											require("avisoPermissao.php");
										}else{
											require("modelSolicitados.php");
											require("listaExames.php"); 
										}
										?></center><?php
									}else{
										require("aviso.php");
									}
								?>
							</div>
						</div>
					</div>
				</div>
				<div id="admin" class="tab-pane fade">
					  <h3><center>Área Administrativa</center></h3><br>
					  <div class="container">
					  <div class="col-sm-2 sidenav">
							<ul class="nav nav-pills nav-stacked">
								<li class="active"><a data-toggle="tab" href="#loginAdmin">Login</a></li>
								<li><a data-toggle="tab" href="#cadastrarProc">Cadastrar Procedimento</a></li>
								<li><a data-toggle="tab" href="#editarProc">Editar Procedimento</a></li>
								<li><a data-toggle="tab" href="#cancelarProc">Cancelar Procedimento</a></li>
								<li><a data-toggle="tab" href="#listar">Listar Exames</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div id="loginAdmin" class="col-sm-8 tab-pane fade in active">
								<?php 
									if(isset($_SESSION['username'])){
										//echo $_SESSION['username'] . $_SESSION['type'];
										if($_SESSION['type'] == 1 or $_SESSION['type'] == 2){
											require("logado.php");
										}else{
											require("avisoPermissao.php");
										}
									}else{
										require("loginAdmin.php");
									}
								?>
							</div>
							<div id="cadastrarProc" class="col-sm-8 tab-pane fade">
								<?php 
									if(isset($_SESSION['username'])){
										if($_SESSION['type'] == 1){
											require("cadastrar.php");
										}else{
											require("avisoPermissao.php");
										}
									}else{
										require("aviso.php");
									}
								?>
							</div>
							<div id="editarProc" class="col-sm-8 tab-pane fade">
								<?php 
									if(isset($_SESSION['username'])){
										if($_SESSION['type'] == 1 or $_SESSION['type'] == 2){
											require("editar_p.php");
										}else{
											require("avisoPermissao.php");
										}
									}else{
										require("aviso.php");
									}
								?>
							</div>
							<div id="cancelarProc" class="col-sm-8 tab-pane fade">
								<?php 
									if(isset($_SESSION['username'])){
										if($_SESSION['type'] == 1){
											require("cancelar_p.php");
										}else{
											require("avisoPermissao.php");
										}
									}else{
										require("aviso.php");
									}
								?>
							</div>
							<div id="listar" class="col-sm-8 tab-pane fade">
								<?php 
									if(isset($_SESSION['username'])){
										if($_SESSION['type'] == 1 or $_SESSION['type'] == 2){
											require("modelExames.php");
											require("listaExamesPacientes.php");
										}else{
											require("avisoPermissao.php");
										}
									}else{
										require("aviso.php");
									}
								?>
							</div>
						</div>
					  </div>
				</div>
			</div>
		</div>
		<br><br><br>
		<footer class="navbar-fixed-bottom" style="background-color: #555; color: white; padding: 3px;">
			<p><center>Sistemas para Web - Carlos Niquini</center></p>
		</footer>
	</body>
</html>
