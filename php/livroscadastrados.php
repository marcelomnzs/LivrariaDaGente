<!DOCTYPE html>
<html>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<head>
	<title>Meu Acervo</title>
	<link rel="stylesheet" href="../css/livroscadastrados.css">
</head>

<body>
	<h1>Meu acervo</h1>


	<?php

	$nome_livro = '';
	$autor_livro = '';
	$subtitulo_livro = '';


	if ($livro == null) {
		echo "<h5 id='nada'>Me parece que você ainda não tem livros, pressione o botão abaixo para adicionar livros a sua coleção</h5>";
		echo '<a href="addlivro.php"><button type="submit" id="addLivroVazio">Adicionar Livro</button></a>';
		exit();
	}

	foreach ($livro as $linha => $liv) :
		$nome_livro = $liv[0];
		$autor_livro = $liv[1];
		$subtitulo_livro = $liv[2]; ?>

		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="well well-sm">
						<div class="row">
							<div class="col-xs-3 col-md-3 text-center">
								<img src="../img/JogosVorazesEmChamas.png" alt="Capa do livro Jogos Vorazes: Em chamas" class="img-rounded img-responsive" />
							</div>
							<div class="col-xs-9 col-md-9 section-box">
								<h2>
									<?= $nome_livro ?><a href="#detalhe" target="_blank"><span class="glyphicon glyphicon-new-window"></span></a>
								</h2>
								<h5 style="position:relative; top:5px;">
									<strong>Autor(a):</strong><?= $autor_livro ?>
								</h5>
								<p>
									<i><?= $subtitulo_livro ?></i>
								</p>
								<hr />
								<div class="row rating-desc">
									<div class="col-md-12">
										<span class="glyphicon glyphicon-heart"></span><span class="glyphicon glyphicon-heart">
										</span><span class="glyphicon glyphicon-heart"></span><span class="glyphicon glyphicon-heart">
										</span><span class="glyphicon glyphicon-heart"></span>(36)<span class="separator">|</span>
										<span class="glyphicon glyphicon-comment"></span>(100 Comments)
									</div>
									<div class="col-md-12 mt-20 excluir">
										<a href="deletlivros.php?linha=<?= $linha ?>" class="btn btn-danger btn-xs">Excluir Livro</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach ?>

			<a href="addlivro.php"><button type="submit" id="addLivro">Adicionar Livro</button></a>

</body>

</html>