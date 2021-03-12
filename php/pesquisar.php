<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<head>

	<link rel="stylesheet" href="../css/livroscadastrados.css">
</head>

<div class="container">
	<div class="mt-4 row">
		<div class='col-md-6'>
			<img src='../img/meuAcervo.png'>
		</div>
		<div class="mt-5 col-md-6">
			<h1>Resultados da Pesquisa</h1>
		</div>
	</div>
</div>

<?php

include 'init.php';

$pesquisa = $_POST['pesquisar'];

include './conect.php';
include 'linksbootstrap.php';


$stmt = $con->prepare("SELECT * FROM livro WHERE titulo LIKE :pesquisa OR autor LIKE :pesquisa OR genero LIKE :pesquisa OR subtitulo LIKE :pesquisa  OR edicao LIKE :pesquisa OR isbn LIKE :pesquisa OR estado LIKE :pesquisa OR valor LIKE :pesquisa");
$stmt->execute(['pesquisa' => "%$pesquisa%"]);


while ($livros = $stmt->fetch()) {
	// echo "Nome do Livro: ". $livros['titulo'] ."<br>";




	$nome_livro = $livros['titulo'];
	$autor_livro = $livros['autor'];
	$subtitulo_livro = $livros['subtitulo'];

	echo "
			<div class='col-md-3 my-4'>
					<div class='card rounded'>
						<div class='card-image pt-3'>
							<img class='img-fluid' src='../img/capaLivro.png' alt='Capa do Livro' />
						</div>
						<div class='card-body text-center'>
							<div class='mb-3'>
								<h4> $nome_livro </h4>
								<h5 class='text-muted'><i> $autor_livro </i></h5>
							</div>
						
						</div>
					</div>
				</div>
				";
}


?>