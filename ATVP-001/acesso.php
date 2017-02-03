<?php
  require_once("config.php");

  $conexao = new mysqli($SERVER,$USERNAME,$PASSWORD, $DATABASE);

  if($conexao->connect_errno){
    echo "Falha de Conexão!";
  }
