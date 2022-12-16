<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cards</title>

  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="http://www.cssscript.com/wp-includes/css/sticky.css" rel="stylesheet" type="text/css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/teste.css">
  <link rel="stylesheet" href="../css/styleIndicacao.css">



</head>

<body>

  <header>
    <section>
      <a id="logo" target="_blank">Educação Sexual</a>
      <label for="toggle-1" class="toggle-menu">
        <ul>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </label>
      <input type="checkbox" id="toggle-1">
      <nav>
        <ul>
          <li><a href="telaLogada.html"><i class="fa fa-home"></i>Home</a></li>
          <li><a href="sobre.html"><i class="fa fa-bullhorn"></i>Sobre</a></li>
          <li><a href="indicacao.html"><i class="fa fa-podcast"></i>Indicações</a></li>
          <li><a href="edGeral.html"><i class="fa fa-graduation-cap"></i>Educação nas Escolas</a></li>
          <li><a href="../php/logout.php"><i class="fa fa-sign-out"></i>Sair</a></li>
        </ul>
      </nav>
    </section>
  </header>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <?php
  require_once "conexao2.php";
  $sql = "SELECT comentario FROM comentar";
  $stmt = $con->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
  $stmt->execute();
  $res = $stmt->fetchAll();
  ?>
  <div class="container">
    <div class="row">

      <div class="card-consultar-chamado">
        <div class="card">
          <div class="card-header">
            Comentarios
          </div>

          <div class="card-body">

            <?php
            foreach ($res as $key => $value) {
            ?>
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?= $value['comentario']; ?></h5>
                </div>
              </div>

            <?php } ?>

          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <style>
    .container {
      width: 100%;
      height: 80vh;
      display: flex;
      margin-left: 500px;
      padding: 1rem;
      align-items: center;

    }


    .form {
      width: 800px;
      height: 540px;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #fff;
      padding: 5px;
      border-radius: 10px;
    }

    .form-header {
      margin-bottom: 3rem;
      display: flex;
      justify-content: space-between;
    }


    .form-header h1::after {
      content: '';
      display: block;
      width: 5rem;
      height: 0.3rem;
      background-color: #C98FEB;
      margin: 0 auto;
      position: absolute;
      border-radius: 10px;
    }

    .input-group {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      padding: 1rem;
    }

    .input-box {
      display: flex;
      flex-direction: column;
      margin-bottom: 1.1 rem;
      width: 100%;
    }

    .input-box input {
      margin: 0.6rem;
      padding: 0.8rem;
      border: none;
      border-radius: 10px;
      box-shadow: 1px 1px 6px #0000001c;
      font-size: 0.8rem;
    }

    .input-box input:hover {
      background-color: #dfc1f0;
    }

    .input-box input:focus-visible {
      outline: 1px solid #C98FEB;
    }

    .input-box label,
    .gender-title h6 {
      font-size: 0.75rem;
      font-weight: 600;
      color: #000000c0;
    }

    .input-box input::placeholder {
      color: #000000be;
    }



    .continue-button button {
      width: 40%;
      height: 55px;
      margin-top: 2rem;
      border: none;
      background-color: #C98FEB;
      padding: 0.62rem;
      border-radius: 20px;
      cursor: pointer;
      margin: 80px;

    }

    .continue-button button:hover {
      background-color: #9c1ae7;
    }

    .continue-button button a {
      text-decoration: none;
      font-size: 0.93rem;
      font-weight: 500;
      color: #fff;
    }




    @media screen and (max-width: 1000px) {

      .container {
        width: 50%;
      }

      .form {
        width: 100%;
        border-radius: 20px 20px;
      }
    }
  </style>
</body>
<script>
  const button = document.querySelector('#like');
  const number = document.querySelector('#number');

  button.addEventListener('click', () => {
    let likeValue = document.querySelector('#number').textContent;
    let newValue = Number(likeValue) + 1;

    button.classList.add('like');
    number.innerHTML = newValue;
  });
</script>

</html>