<html>
<head>
  <meta  charset="UTF-8">
  <link rel="stylesheet" href="CSS/bootstrap.css">
  <title></title>
</head>
<body>
	<center>
	<form action="editarProcedimento.php" method="post">
		<table class="table">
			<tr><td style="float: right;">Procedimento:</td> <td><?php require("modelProcedimentos.php"); require("listaProcedimentosSelect.php"); ?></td></tr>
			<tr><td style="float: right;">Nome:</td> <td> <input type="text" name="nome" <?php if($_SESSION['type'] == 2) echo "disabled";?> ></td></tr>
			<tr><td style="float: right;">Preço:</td> <td> <input type="number" name="preco"></td></tr>
		</table>
		<div style="float: right;">
		<input class="btn btn-success" type="submit" value="Editar Procedimento"> 
		</div>
	</form>
	</center>
	</body>
</html>