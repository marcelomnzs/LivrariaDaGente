<?php require 'init.php'; ?>
<?php if (isset($_SESSION['usuario'])) : ?>
  <?php 
$usuario= $_SESSION['usuario'];
$usuario_id= (int) $_SESSION['id'];

include './conect.php';

$stmt = $con->prepare("SELECT count(*) as liv FROM livro WHERE usuario_id =?");
$stmt->execute([$usuario_id]);
$livros= $stmt->fetch();

   ?>

<?php 


$usuario= $_SESSION['usuario'];
$usuario_id= (int) $_SESSION['id'];

$stmt = $con->prepare("SELECT count(saldo) as coin FROM usuario WHERE id =?");
$stmt->execute([$usuario_id]);
$saldo= $stmt->fetch();




 ?>

  <!DOCTYPE html>
  <html lang="pt-br">

  <?php
  include "linksbootstrap.php";
  ?>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria Da Gente</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-96x96.png">
  </head>

  <body>
    <link rel="stylesheet" href="../css/perfil.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <body class="profile-page sidebar-collapse">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">
          <div class="navbar-translate">
            <a class="navbar-brand" rel="tooltip" data-placement="bottom">
              <img src="../img/logo-linha.png" alt="Icone do Home" id="home">
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
                <a class="nav-link" href="logout.php">Sair</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="wrapper">
        <div class="page-header clear-filter" filter-color="blue">
          <div class="page-header-image" data-parallax="true" style="background-image:url('../img/foto-fundo.jpg');"></div>
          <div class="container">
            <div class="photo-container">
              <!-- Imagem do usuário -->
              <img src="https://raw.githack.com/creativetimofficial/now-ui-kit/master/assets/img/ryan.jpg" alt="Foto do Usuário">
            </div>
            <!-- Info do usuário -->
            <h3 class="title"><?= $_SESSION['usuario'] ?></h3>
            <div class="content">
              <div class="info-usuario mt-4">
                <h2><?= $livros['liv'] ?></h2>
                <p>Livros</p>
              </div>
              <div class="info-usuario mt-4">
                <h2><?= $saldo['coin'] ?></h2>
                <p>Pagecoins</p>
              </div>
              <div class="info-usuario mt-4">
                <h2><?= $livros['liv'] ?></h2>
                <p>Livros Doados</p>
              </div>
            </div>
          </div>

          <!-- Botões de funcionalidades -->
          <section>
            <div class="container">
              <div class="row">
                <!-- Card 1 -->
                <div class="col">
                  <div class="single-service">
                    <a href="../perfilConfig.php"><span class="func"></span></a>
                    <i class="fas fa-user"></i>
                    <h4>Meu Perfil</h4>
                    <p>Clique aqui para ver e gerenciar as opções do seu perfil</p>
                  </div>
                </div>
                <!-- Card 2 -->
                <div class="col">
                  <div class="single-service">
                    <a href="livroscadastrados.php"><span class="func"></span></a>
                    <i class="fas fa-book-reader"></i>
                    <h4>Meu acervo</h4>
                    <p>Clique aqui para ver e gerenciar as opções do seu acervo</p>
                  </div>
                </div>
                <!-- Card 3 -->
                <div class="col">
                  <div class="single-service">
                    <a href="addlivro.php"><span class="func"></span></a>
                    <i class="fas fa-book"></i>
                    <h4>Adicionar Livro</h4>
                    <p>Clique aqui para adicionar um livro ao seu acervo pessoal</p>
                  </div>
                </div>
                <!-- Card 4 -->
                <div class="col">
                  <div class="single-service">
                    <a href="pagecoin.php"><span class="func"></span></a>
                    <i class="fas fa-chart-bar"></i>
                    <h4>Meu saldo</h4>
                    <p>Clique aqui para ver as opções de saldo da sua conta</p>
                  </div>
                </div>
              <!-- Card 5 -->
                <div class="col">
                  <div class="single-service">
                    <a href="pesquisaForm.php"><span class="func"></span></a>
                    <i class="fas fa-search"></i>
                    <h4>Pesquise Livros</h4>
                    <p>Clique aqui para buscar um livro pelo seu nome ou autor</p>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
      </section>
      </div>
      </div>
      </div>
      </div>
      </div>
      <!-- Footer -->
      <hr class="p-0 m-0 b-0">
      <!-- Footer -->
  <footer class="bg-white">
     <div class="container py-5">
         <div class="row py-3">
             <div class="col-md-4 pl-5">
                 <h6 class="text-uppercase font-weight-bold mb-4"><a href="sobre.php">Sobre</a></h6>
                 <ul class="list-unstyled mb-0">
                   <li class="mb-2"><a href="sobre.php#quem-somos" class="text-muted">Sobre Nós</a></li>
                   <li class="mb-2"><a href="sobre.php#fale-conosco" class="text-muted">Fale Conosco</a></li>
                   <li class="mb-2"><a href="sobre.php#equipe" class="text-muted">Conheça nossa equipe</a></li>
                 </ul>
             </div>
             <div class="col-md-4">
                 <h6 class="text-uppercase font-weight-bold mb-4">Ajuda</h6>
                 <ul class="list-unstyled mb-0">
                     <li class="mb-2"><a href="sobre.php#pagamento" class="text-muted">Como funciona o pagamento?</a></li>
                     <li class="mb-2"><a href="sobre.php#envio" class="text-muted">Envio</a></li>
                 </ul>
             </div>
        
             <div class="col-md-4">
                 <h6 class="text-uppercase font-weight-bold mb-4">Endeço Físico e telefone</h6>
                 <p class="text-muted mb-4">Rua Fitícia - Virando a esquina, 380. (81)3548-1234</p>
                 <ul class="list-inline mt-4">
                     <li class="list-inline-item "><a href="#" target="_blank" title="twitter"><img class="imagensRodape" src="../img/twitter.png" alt=""></a></li>
                     <li class="list-inline-item "><a href="#" target="_blank" title="facebook"><img class="imagensRodape" src="../img/facebook-novo.png" alt=""></a></li>
                     <li class="list-inline-item "><a href="https://www.instagram.com/livrariadagente9/" target="_blank" title="instagram"><img class="imagensRodape" src="img/instagram-novo.png" alt=""></a></li>
                 </ul>
             </div>
         </div>
     </div>
     <hr class="p-0 m-0 b-0">
     <div class="bg-light py-2">
         <div class="container text-center">
             <p class="text-muted mb-0 py-2">© 2021 Livraria da gente&trade; Todos os direitos reservados.</p>
         </div>
     </div>
 </footer>

      <script src="../perfil.js"></script>

    </body>

  </html>
<?php endif ?>