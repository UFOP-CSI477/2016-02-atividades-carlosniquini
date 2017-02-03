<html>
<head>
  <meta  charset="UTF-8">
  <link rel="stylesheet" href="CSS/bootstrap.css">
  <title></title>
</head>
<body>
	<center>
	<form action="editarExame.php" method="post">
		<table class="table">
			<tr><td style="float: right;">Exame:</td> <td><?php require("modelSolicitados.php"); require("listaExamesSelect.php"); ?></td></tr>
			<tr><td style="float: right;">Procedimento:</td> <td><?php require("modelProcedimentos.php"); require("listaProcedimentosSelect.php"); ?></td></tr>
			<tr><td style="float: right;">Data:</td> <td> <input type="date" name="data"></td></tr>
		</table>
		<div style="float: right;">
		<input class="btn btn-success" type="submit" value="Editar Exame"> 
		</div>
	</form>
	</center>
	</body>
</html>