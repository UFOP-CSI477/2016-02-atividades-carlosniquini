<?php
  //session_start();
  $id = $_SESSION['id'];
  $sql = "SELECT t2.id, t1.nome, t1.preco, t2.data FROM procedimentos t1, exames t2 WHERE t2.paciente_id = '$id' AND t2.procedimento_id = t1.id ORDER BY t2.data DESC, t1.nome ASC";
  //echo $sql;
  $resultado = $conexao->query($sql);