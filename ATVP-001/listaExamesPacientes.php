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
    </tr>
    <?php
	  $x = 0;
      while($linha = $resultado->fetch_assoc()){
        ?>
        <tr>
		  <td><?php echo $linha["data"];?></td>
          <td><?php echo $linha["paciente"];?></td>
        </tr>
        <?php }?>
  </table>
</body>
</html>