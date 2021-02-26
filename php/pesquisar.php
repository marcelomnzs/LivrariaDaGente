
<head>	
	<link rel="stylesheet" href="../css/livroscadastrados.css">
</head>

<?php 
 
 include 'init.php';

$pesquisa= $_POST['pesquisar'];

include '../conect.php';
include 'linksbootstrap.php';


$stmt = $con->prepare("SELECT * FROM livro WHERE titulo LIKE :pesquisa OR autor LIKE :pesquisa OR genero LIKE :pesquisa OR subtitulo LIKE :pesquisa  OR edicao LIKE :pesquisa OR isbn LIKE :pesquisa OR estado LIKE :pesquisa OR valor LIKE :pesquisa");
$stmt->execute(['pesquisa' => "%$pesquisa%"]);

while ($livros = $stmt->fetch()){
 // echo "Nome do Livro: ". $livros['titulo'] ."<br>";


		$nome_livro = $livros['titulo'];
		$autor_livro = $livros['autor'];
		$subtitulo_livro = $livros['subtitulo'];
		
		echo"<h1>Resultados da Pesquisa</h1>";
		
		echo"<div class='container'>
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
										<a href='addlistDesejo.php?id=" . $livros['id']  . "' class='btn btn-danger btn-xs excluir'>Lista de Desejos</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>";
}

?>

