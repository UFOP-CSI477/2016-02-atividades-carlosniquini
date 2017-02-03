<html>
<head>
  <meta  charset="UTF-8">
  <link rel="stylesheet" href="CSS/bootstrap.css">
  <title></title>
</head>
<body>
	<center>
	<form action="novoProcedimento.php" method="post">
		<table class="table">
			<tr><td style="float: right;">Nome:</td> <td><input type="text" name="nome"></td></tr>
			<tr><td style="float: right;">Preço:</td> <td> <input type="number" name="preco"></td></tr>
		</table>
		<div style="float: right;">
		<input class="btn btn-warning" type="reset" value="Limpar"> <input class="btn btn-success" type="submit" value="Cadastrar"> 
		</div>
	</form>
	</center>
	</body>
</html>