<head>
	<title>Pesquisar Livros</title>
	<link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-96x96.png">
	<link rel="stylesheet" href="../css/pesquisaForm.css">
</head>

<?php require 'init.php'; ?>
<?php require 'linksbootstrap.php'; ?>

<div class="container">
	<div class="row mb-5">
		<div class="background pt-4 rounded centered col-md-6">
			<form action="pesquisar.php" method="POST">
				<label class="col-md-12">
			        <p class="label-txt text-center"><strong>Pesquisa</strong></p>
			        <input type="text" class="input" name="pesquisar" placeholder="Pesquise um livro digitando seu nome, autor, gênero, isbn, subtítulo (apenas um)" required>
			        <div class="line-box">
			            <div class="line"></div>
			        </div>
			    </label>
				<button type="submit" class="col-md-12 mt-3">Entrar</button>
			</form>
		</div>
	</div>
</div>