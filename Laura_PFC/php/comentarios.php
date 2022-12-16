<?php
    session_start();
    require_once "../php/conexao2.php";

    $comentario = $_POST['comentario'];

    try {
        $sql = "INSERT INTO comentar (comentario)
              VALUES ('$comentario')";
        $con->exec($sql);
        // echo "Usuário inserido com sucesso.";
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $con = null;

   header('Location: ../html/indicacao.html')
?>