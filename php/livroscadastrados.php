<!DOCTYPE html>
<html>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<head>
	<title>Meu Acervo</title>
	<link rel="stylesheet" href="../css/livroscadastrados.css">
	<link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-96x96.png">
</head>

<body>


	<?php
	include 'init.php';
	include './conect.php';

	$usuario = $_SESSION['usuario'];
	$id_sessao = (int) $_SESSION['id'];

	//Read da Tabela de Livros
	$stmt = $con->prepare("SELECT * from livro WHERE usuario_id = ? ;");
	$stmt->execute([$id_sessao]);
	$livros = $stmt->fetchAll();

	//Condição que verifica se o usuário possui livros, caso não ele recebe uma mensagem
	if (sizeof($livros) == 0) {
		echo "<h1>Meu acervo</h1>";
		echo "
			<div class='float-right'>
				<img src='../img/meuAcervo.png'>
			</div>
		";
		echo "<h5 id='nada'>Me parece que você ainda não tem livros, pressione o botão abaixo para adicionar livros a sua coleção</h5>";
		echo '<a href="addlivro.php"><button type="submit" id="zeroLivro" class="mxauto">Adicionar Livro</button></a>';
		exit();
	}


	?>

	<div class="container">
		<div class="mt-4 row">
			<div class='col-md-6'>
				<img src='../img/meuAcervo.png'>
			</div>
			<div class="mt-5 col-md-6">
				<h1>Meu acervo</h1>
			</div>
		</div>
		<div class="text-center">
			<a href="addlivro.php" class="btn-lg btn-outline-primary add">Adicionar Livro</a>
		</div>
	</div>





	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


	<div class="container">
		<div class="row" id="ads">
			<?php foreach ($livros as $livro) :
				$nome_livro = $livro['titulo'];
				$autor_livro = $livro['autor'];
				$subtitulo_livro = $livro['subtitulo'];
				$id_dono = $livro['usuario_id'];
				$id_livro = $livro['id'];
				$campos = "nome=" . $nome_livro . "&autor=" . $autor_livro . "&sub=" . $subtitulo_livro . "&genero=" . $livro['genero'] . "&edicao=" . $livro['edicao'] . "&isbn=" . $livro['isbn'] . "&estado=" . $livro['estado'];
			?>
				<div class="col-md-3 mb-4">
					<div class="card rounded">
						<div class="card-image pt-3">
							<img class="img-fluid" src="../img/capaLivro.png" alt="Capa do Livro" />
						</div>
						<div class="card-body text-center">
							<div class="mb-3">
								<h4><?= $nome_livro ?></h4>
								<h5 class="text-muted"><i><?= $autor_livro ?></i></h5>
							</div>
							<div class="btn-group" role="group">
								<a href='deletlivros.php?id= <?= $id_livro ?>' class="btn-lg btn-outline-primary excluir mr-2">Excluir Livro</a>
								<!-- <a href="deletlivros.php?id= . '<?= $livro['id'] ?>'"  class="btn-lg btn-outline-primary excluir mr-2">Excluir Livro</a> -->
								<a href='updateform.php?id= <?= $id_livro ?>' class="btn-lg btn-outline-primary editar mr-2">Editar Livro</a>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>


	<script>
		//Confirmação de exclusão
		//Seleciona todas as classes '.excluir'
		var links = document.querySelectorAll('.excluir');
		for (link of links) { //foreach
			link.addEventListener('click', function(e) {
				//Se a confirmação for 'falsa' (click = cancelar)
				if (!confirm('Apagar Livro?')) {
					//Cancela a exclusão
					e.preventDefault();
				}
			});
		}
	</script>
</body>

</html>