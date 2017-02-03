<?php
  //session_start();
  $id = $_SESSION['id'];
  $sql = "SELECT t3.nome as paciente, t2.id, t2.data FROM exames t2, pacientes t3 WHERE t2.paciente_id = t3.id ORDER BY t2.data DESC, t3.nome ASC";
  //echo $sql;
  $resultado = $conexao->query($sql);