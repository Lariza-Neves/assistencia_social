<?php
$conexao = new mysqli("localhost","root","","protecao");

// Check connection
if ($conexao -> connect_errno) {
  echo "Erro ao conectar ao banco: " . $conexao -> connect_error;
  exit();
}


  //$conexao -> close();

?>