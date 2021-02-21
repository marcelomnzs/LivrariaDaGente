<!DOCTYPE html>
<html>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<head>
	<title>Lista de Desejos</title>
	<link rel="stylesheet" href="../css/livroscadastrados.css">
</head>

<body>
	<h1>Lista de Desejos</h1>


	<?php
	include 'init.php';
	include '../conect.php';

	$usuario = $_SESSION['usuario'];
	$id_sessao = (int) $_SESSION['id'];

	//Read da Tabela de Livros
	$stmt = $con->prepare("SELECT * FROM listaDeDesejos WHERE usuario_id = ? ;");
	$stmt->execute([$id_sessao]);
	$livros = $stmt->fetchAll();



	if (sizeof($livros) == 0) {
		echo "<h5 id='nada'>Me parece que você ainda não tem livros na sua lista de desejos, pressione o botão abaixo para pesquisar um livro e adicionar a sua lista.</h5>";
		echo '<a href="pesquisaForm.php"><button type="submit" id="zeroLivro" class="mxauto">Adicionar Livro</button></a>';
		exit();
	}

	foreach ($livros as $livro) :
		$nome_livro = $livro['titulo'];
		$autor_livro = $livro['autor'];
		$subtitulo_livro = $livro['subtitulo'];
		$id_dono = $livro['usuario_id'];

			echo "
		<div class='container'>
			<div class='row'>
				<div class='col-md-6 '>
					<div class='well well-sm'>
						<div class='row'>
							<div class='col-xs-3 col-md-3 text-center'>
								<img src='../img/JogosVorazesEmChamas.png' alt='Capa do livro Jogos Vorazes: Em chamas' class='img-rounded img-responsive' />
							</div>
							<div class='col-xs-9 col-md-9 section-box'>
								<h2>
									$nome_livro  <a href='#detalhe' target='_blank'><span class='glyphicon glyphicon-new-window'></span></a>
								</h2>
								<h5 style='position:relative; top:5px;'>
									<strong>Autor(a):</strong> $autor_livro 
								</h5>
								<p>
									<i> $subtitulo_livro </i>
								</p>
								<hr />
								<div class='row rating-desc'>
									<div class='col-md-12'>
										<span class='glyphicon glyphicon-heart'></span><span class='glyphicon glyphicon-heart'>
										</span><span class='glyphicon glyphicon-heart'></span><span class='glyphicon glyphicon-heart'>
										</span><span class='glyphicon glyphicon-heart'></span>(36)<span class='separator'>|</span>
										<span class='glyphicon glyphicon-comment'></span>(100 Comments)
									</div>
									<div class='col-md-12 mt-20'>
										<a href='deletdesejo.php?id=" . $livro['id']  . "' class='btn btn-danger btn-xs excluir'>Excluir da Lista</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		";
	endforeach;

	?>
	<a href="addlivro.php"><button type="submit" id="addLivro" class="mx-auto">Adicionar Livro</button></a>

	<script>
		var links = document.querySelectorAll('.excluir');
		for (link of links) { //foreach
			link.addEventListener('click', function(e) {
				if (!confirm('Apagar Livro?')) {
					e.preventDefault();
				}
			});
		}
	</script>
</body>

</html>