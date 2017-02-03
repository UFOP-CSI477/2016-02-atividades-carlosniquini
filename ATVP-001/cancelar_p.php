<html>
<head>
  <meta  charset="UTF-8">
  <link rel="stylesheet" href="CSS/bootstrap.css">
  <title></title>
</head>
<body>
	<center>
	<form action="cancelarProcedimento.php" method="post">
		<table class="table">
			<tr><td style="float: right;">Procedimento:</td> <td><?php require("modelProcedimentos.php"); require("listaProcedimentosSelect.php"); ?></td></tr>
		</table>
		<div style="float: right;">
		<input class="btn btn-success" type="submit" value="Cancelar Procedimento"> 
		</div>
	</form>
	</center>
	</body>
</html>