<!DOCTYPE html>
<html lang="en">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria Da Gente</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-96x96.png">
</head>
<body>
  <link rel="stylesheet" href="../css/perfil.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  
<body class="profile-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" rel="tooltip" data-placement="bottom">
          <img src="../img/logo-linha.png" alt="Icone do Home" id="home" >
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/img/blurred-image-1.jpg">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Sair</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper">
    <div class="page-header clear-filter" filter-color="orange">
      <div class="page-header-image" data-parallax="true" style="background-image:url('../img/foto-fundo.jpg');">
      </div>
      <div class="container">
        <div class="photo-container">
        <!-- Imagem do usuário -->
          <img src="https://raw.githack.com/creativetimofficial/now-ui-kit/master/assets/img/ryan.jpg" alt="Foto do Usuário">
        </div>
        <!-- Info do usuário -->
        <h3 class="title">Usuário Teste</h3>
        <div class="content">
          <div class="info-usuario">
            <h2>26</h2>
            <p>Livros</p>
          </div>
          <div class="info-usuario">
            <h2>550</h2>
            <p>Pagecoins</p>
          </div>
          <div class="info-usuario">
            <h2>3</h2>
            <p>Livros Doados</p>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
          <!-- Tab panes -->
          <div class="tab-content gallery">
            <div class="tab-pane active" id="home" role="tabpanel">
              <div class="col-md-10 ml-auto mr-auto">
                <div class="row collections">
                    <div class="col-md-6">
                      <a href="meuAcervo.php"><img src="../img/imagemMeuAcervo.png" alt="Clique aqui para entrar no Seu acervo" class="img-raised"></a>
                      <a href="addlivro.php"><img src="../img/imagemAdicionarLivro.png" alt="Clique aqui para adicionar um Livro" class="img-raised"></a>
                    </div>
                    <div class="col-md-6">
                    <a href="#"><img src="../img/imagemMeuPerfil.png" alt="Clique aqui para acessar o seu perfil" class="img-raised"></a>
                    <a href="pagecoin.php"><img src="../img/imagemMeuSaldo.png" alt="Clique aqui para ver suas opções de saldo" class="img-raised"></a>
                    </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
  <script src="../perfil.js"></script>
</body>
</html>