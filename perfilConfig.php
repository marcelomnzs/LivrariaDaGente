<?php require 'php/init.php'; ?>
<?php if (isset($_SESSION['usuario'])) : ?>

	<?php
	include 'conect.php';
	include 'php/linksbootstrap.php';

	$usuario = $_SESSION['usuario'];
	$id = (int) $_SESSION['id'];

	$stmt = $con->prepare("SELECT * FROM usuario WHERE id = ?");
	$stmt->execute([$id]);
	$users = $stmt->fetchAll();

	?>

	<?php foreach ($users as $user) : ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Meu Perfil</title>
	<link rel="stylesheet" href="css/perfilConfig.css">
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-10 col-xl-8">
				<h2 class="h3 mt-5 page-title text-center">Configurações de Usuário</h2>
				<div class="my-4">
					<div class="row mt-5 align-items-center ">
						<div class="col-md-3 text-center mb-5">
							<div class="avatar avatar-xl ">
								<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="..." class="avatar-img rounded-circle" />
							</div>
						</div>
						<div class="col">
							<div class="row">
								<div class="col-md-7">
									<h4><a href="php/perfil.php"><?= $user['nome'] ?></a></h4>
									<p><i>Informações do seu perfil</i></p>
								</div>
							</div>
						</div>
					</div>
					<hr />
					<form action="/php/editNome.php?id=<?= $id ?>" method="POST" class="mb-5">
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="firstname">Nome Atual</label>
								<input type="text" name="nome" value="<?= $user['nome'] ?>" class="form-control" placeholder="Ex: João Vitor" />
							</div>
							<div class="form-group col-md-6">
								<label for="lastname">Novo Nome</label>
								<input type="text" name="novo" class="form-control" placeholder="Ex: João Victor" />
							</div>
						</div>
						<button type="submit" class="btn btn-success float-right col-md-3">Alterar Nome</button>
					</form>
					<hr>
					<form action="/php/editEmail.php?id=<?= $id ?>" method="POST" class="mb-5">
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="firstname">E-mail Atual</label>
								<input type="text" id="email" value="<?= $user['email'] ?>" class="form-control" placeholder="livriadagent@email.com" />
							</div>
							<div class="form-group col-md-6">
								<label for="lastname">Novo E-mail</label>
								<input type="text" id="emailAtual" class="form-control" placeholder="livrariadagente@email.com" />
							</div>
						</div>
						<button type="submit" class="btn btn-success float-right col-md-3">Alterar e-mail</button>
					</form>
				</div>
				<hr class="my-4" />
				<form action="" method="POST">
					<div class="row mb-4">
						<div class="col-md-6">
							<div class="form-group">
								<label for="inputPassword5">Nova Senha</label>
								<input type="password" class="form-control" id="inputPassword5" placeholder="Nova Senha" />
							</div>
							<div class="form-group">
								<label for="inputPassword6">Confirmação da nova senha</label>
								<input type="password" class="form-control" id="inputPassword6" placeholder="Repita sua nova senha" />
							</div>
						</div>
						<div class="col-md-6 mt-4">
							<p class="mb-2">Requerimentos de Senha</p>
							<p class="small text-muted mb-2">Para alterar a sua senha você deverá seguir os seguintes critérios:</p>
							<ul class="small text-muted pl-4 mb-0">
								<li>Mínimo de 8 caracteres</li>
								<li><strong><i>Não</i></strong> deverá ser igual a Senha Atual</li>
							</ul>
						</div>
					</div>
					<button type="submit" class="btn btn-success float-right col-md-3 mb-3">Alterar Senha</button>
				</form>
			</div>
		</div>
	</div>

	    <!-- Footer -->
		<hr class="p-0 m-0 b-0">
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
                <li class="list-inline-item "><a href="#" target="_blank" title="twitter"><img class="imagensRodape" src="../img/twitter.png" alt=""></a></li>
                <li class="list-inline-item "><a href="#" target="_blank" title="facebook"><img class="imagensRodape" src="../img/facebook-novo.png" alt=""></a></li>
                <li class="list-inline-item "><a href="https://www.instagram.com/livrariadagente9/" target="_blank" title="instagram"><img class="imagensRodape" src="../img/instagram-novo.png" alt=""></a></li>
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

	<?php endforeach ?>

<?php else : ?>

	<h1>Area Restrita</h1>
<?php endif ?>