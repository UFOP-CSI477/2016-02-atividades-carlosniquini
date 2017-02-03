<html>
<head>
  <meta  charset="UTF-8">
  <link rel="stylesheet" href="CSS/bootstrap.css">
  <title></title>
</head>
<body>
	<center>
	<form action="cancelarExame.php" method="post">
		<table class="table">
			<tr><td style="float: right;">Exame:</td> <td><?php require("modelSolicitados.php"); require("listaExamesSelect.php"); ?></td></tr>
		</table>
		<div style="float: right;">
		<input class="btn btn-success" type="submit" value="Cancelar Exame"> 
		</div>
	</form>
	</center>
	</body>
</html>