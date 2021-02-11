<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/index.css">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-96x96.png">
  <!-- Link para importar a estilização do bootstrap -->
  <?php
    include "php/linksbootstrap.php";
  ?>
  <title>Livraria da Gente</title>
</head>

<body>
  <?php
  include "conect.php";

  $smt = $con->prepare("SELECT id,nome,email,senha,saldo FROM usuario");
  $smt->execute();
  $aln = $smt->fetch();
  ?>

  <header>
    <nav class="navbar">
      <a href="index.php"><img src="img/logo.png" alt="Logo Livraria da Gente" id="logo"></a>
      <div class="navbar-right pr-4">
        <a href="php/cadastro.php" id="cadastrar">Cadastrar</a>
        <a class="btn btn-outline-info" href="php/login.php" role="button" href="php/login.php">Entrar</a>
      </div>
    </nav>
  </header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/Carrossel1-Teste.png" alt="A livraria da Gente tem o objetivo de difundir a leitura para todos!">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/Carrossel1-Teste.png" alt="Feliz dia do Livro">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/Carrossel1-Teste.png" alt="Uma livraria feita por você, para você!">
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

  <!-- Footer -->
  <footer class="bg-white">
     <div class="container py-5">
         <div class="row py-3">
             <div class="col-md-4 pl-5">
                 <h6 class="text-uppercase font-weight-bold mb-4">Sobre</h6>
                 <ul class="list-unstyled mb-0">
                     <li class="mb-2"><a href="#" class="text-muted">Fale Conosco</a></li>
                     <li class="mb-2"><a href="#" class="text-muted">Sobre Nós</a></li>
                 </ul>
             </div>
             <div class="col-md-4">
                 <h6 class="text-uppercase font-weight-bold mb-4">Ajuda</h6>
                 <ul class="list-unstyled mb-0">
                     <li class="mb-2"><a href="#" class="text-muted">Como funciona o pagamento?</a></li>
                     <li class="mb-2"><a href="#" class="text-muted">Envio</a></li>
                     <li class="mb-2"><a href="#" class="text-muted">Cancelamento</a></li>
                     <li class="mb-2"><a href="#" class="text-muted">Retorno</a></li>
                 </ul>
             </div>
        
             <div class="col-md-4">
                 <h6 class="text-uppercase font-weight-bold mb-4">Endeço Físico e telefone</h6>
                 <p class="text-muted mb-4">Rua Fitícia - Virando a esquina, 380. (81)3548-1234</p>
                 <ul class="list-inline mt-4">
                     <li class="list-inline-item "><a href="#" target="_blank" title="twitter"><img class="imagensRodape" src="img/twitter.png" alt=""></a></li>
                     <li class="list-inline-item "><a href="#" target="_blank" title="facebook"><img class="imagensRodape" src="img/facebook-novo.png" alt=""></a></li>
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


</body>

</html>