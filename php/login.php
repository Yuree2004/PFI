<php
ob_start();
?>

<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <?php
        include("conexao.php");

        //verificar formulario para autenticação
        $email=$_POST["email"];
        $senha=$_POST["senha"];
        
        $sql="SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
        $resultado=mysqli_query($conexao, $sql);
        $linhas=mysqli_affected_rows($conexao);

        if($linhas>0){
            session_start();
            $_SESSION["usuario"]=$email;
            while($exibirNome=mysqli_fetch_array($resultado));
            header("Location: ../bootstrap-5-post-template-main/login.html");

        }
        else{
            echo "Dados incorretos! <br>";
        }
    ?>
    </body>
</html>