<?php
    include("conexao.php");

    $email=$_POST['email'];
    $nome=$_POST['nome'];
    $sobrenome=$_POST['sobrenome'];
    $senha=$_POST['senha'];

    $sql="INSERT INTO usuarios(email, nome, sobrenome, senha)
            VALUES ('$email', '$nome', '$sobrenome', '$senha')";

    if(mysqli_query($conexao, $sql)){
        echo "Usuário cadastrado com sucesso";
        header("Location: ../html/telaLogada.html");

    }
    else{
        echo "Erro".mysqli_connect_error($conexao);
    }        
    mysqli_close($conexao);
?>