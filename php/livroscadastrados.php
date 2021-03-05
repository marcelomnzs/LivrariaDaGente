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
	

	<?php
	include 'init.php';
	include '../conect.php';

	$usuario = $_SESSION['usuario'];
	$id_sessao = (int) $_SESSION['id'];

	//Read da Tabela de Livros
	$stmt = $con->prepare("SELECT * from livro WHERE usuario_id = ? ;");
	$stmt->execute([$id_sessao]);
	$livros = $stmt->fetchAll();

	//Condição que verifica se o usuário possui livros, caso não ele recebe uma mensagem
	if (sizeof($livros) == 0) {
		echo"<h1>Meu acervo</h1>";
		echo "<h5 id='nada'>Me parece que você ainda não tem livros, pressione o botão abaixo para adicionar livros a sua coleção</h5>";
		echo '<a href="addlivro.php"><button type="submit" id="zeroLivro" class="mxauto">Adicionar Livro</button></a>';
		exit();
	}
	
	echo"<h1 id='margin'>Meu acervo</h1>";
	echo'<a href="addlivro.php" id="add"><button type="submit" id="addLivro">Adicionar Livro</button></a>';

	foreach ($livros as $livro) :
		$nome_livro = $livro['titulo'];
		$autor_livro = $livro['autor'];
		$subtitulo_livro = $livro['subtitulo'];
		$id_dono = $livro['usuario_id'];
		$campos =  "nome=" . $nome_livro . "&autor=" . $autor_livro . "&sub=" . $subtitulo_livro . "&genero=" . $livro['genero'] . "&edicao=" . $livro['edicao'] . "&isbn=" . $livro['isbn'] . "&estado=" . $livro['estado'];

		//Div impressa para cada livro
			echo "
		<div class='container'>
			<div class='row'>
				<div class='col-md-6 centered'>
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
										<a href='deletlivros.php?id=" . $livro['id']  . "' class='btn btn-danger btn-xs excluir'>Excluir Livro</a>
										<a href='updateform.php?id=" . $livro['id']  . "&". $campos . " ' class='btn btn-warning btn-xs alterar'>Editar Livro</a>
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