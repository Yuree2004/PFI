<?php
  $servidor = "localhost";
  $usuario = "root";
  $senha = "";

  try {
    $con = new PDO("mysql:host=$servidor;dbname=pfi", $usuario, $senha);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conexão realizada com sucesso";
  } catch(PDOException $e) {
    echo "Conexão falhou: " . $e->getMessage();
  }

  // $con = null;
?>