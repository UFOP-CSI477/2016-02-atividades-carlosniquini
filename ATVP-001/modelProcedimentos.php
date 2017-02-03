<?php
  
  $sql = "SELECT nome, preco, id FROM procedimentos ORDER by nome";
  $resultado = $conexao->query($sql);
