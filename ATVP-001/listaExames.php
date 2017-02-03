<!DOCTYPE html>
<html>
<head>
  <meta  charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="CSS/bootstrap.css">
</head>
<body>
  <table class="table">
    <tr>
      <th> Data </th>
	  <th> Nome </th>
      <th> Preço </th>
    </tr>
    <?php
	  $x = 0;
      while($linha = $resultado->fetch_assoc()){
        ?>
        <tr>
		  <td><?php echo $linha["data"];?></td>
          <td><?php echo $linha["nome"];?></td>
          <td><?php echo $linha["preco"]; $x = $x+$linha["preco"];?></td>
        </tr>
        <?php }?>
  </table>
  <h4 style="color:red">TOTAL: R$<?php echo $x?></h4>
</body>
</html>