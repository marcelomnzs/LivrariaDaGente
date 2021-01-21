<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-96x96.png">
     <!-- Link para importar a estilização do bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Livraria da Gente</title>
</head>
<body>
     <!-- Importação do JS para animação do bototstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <header>
        <div id="navbar">
            <a href="index.php"><img src="img/logo.png" alt="Logo Livraria da Gente" id="logo"></a>
            <a id="cadastrar" href="php/cadastro.php">Cadastrar</a>
            <h4 id="entrar"><a href="php/login.php">Entrar</a></h4>
        </div>
    </header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" >
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/Carrossel1.png" alt="A livraria da Gente tem o objetivo de difundir a leitura para todos!">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/Carrossel2.png" alt="Feliz dia do Livro">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/Carrossel3-(Atualizado).png" alt="Uma livraria feita por você, para você!">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <footer id="rodape">
            <img src="img/pagecoin.png" alt="Pagecoins" id="pagecoin" class="botoes">
            <img src="img/acervo.png" alt="Acervo da Gente" id="acervo" class="botoes">
            <img src="img/sobre.png" alt="Sobre" id="sobre" class="botoes">
        </footer>
</body>
</html>