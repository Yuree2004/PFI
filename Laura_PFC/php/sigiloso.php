<php
ob_start();
?>

<html>
    <head>
        <title>Sessao e cookies: conteúdo sigiloso</title>
    </head>
    <body>
        <?php
        session_start();
        if(!isset($_SESSION["usuario"])){
           echo "Erro";
           exit();
        }
        echo "Olá ".$_SESSION["usuario"];
        echo "<br><BR>";
    ?>
    <h1>[Conteúdo privado/sigiloso]</h1>
    <hr>

    </body>
</html>