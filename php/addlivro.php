<!DOCTYPE html>
<html>

<head>
	<title>Adicionar Livro</title>
	<link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-96x96.png">
	<link rel="stylesheet" href="../css/addlivro.css">
	<?= require "linksbootstrap.php"; ?>

</head>

<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-7">
				<h2 class="h3 my-5 page-title text-center">Adicionar Livro</h2>
				<div class="img-fluid col-md-2 float-right imagemLivro">
					<img src="../img/adicionandoLivro.png" alt="Ilustração de personagem alterando as configurações do perfil">
				</div>
				<form action="validlivro.php" method="POST">
					<div class="form-row">
						<div class="form-group col-md-6">
							<label>Nome:</label>
							<input type="text" name="nome" class="form-control" placeholder="Jogos Vorazes" required>
						</div>
						<div class="form-group col-md-6">
							<label>Subtítulo:</label>
							<input type="text" name="subtitulo" class="form-control" placeholder="Em chamas" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label>Autor:</label>
							<input name="autor" class="form-control" id="inputPassword5" placeholder="Autor da Obra" required>
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-6">
							<label>ISBN:</label>
							<input name="isbn" class="form-control" placeholder="Apenas números">
						</div>
						<div class="form-group col-md-6">
							<label>Edição:</label>
							<input name="edicao" type="number" min="1" max="999" class="form-control" placeholder="Edição do Livro" required>
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-6">
							<label>Gênero:</label>
							<select name="genero" class="form-control" required>
								<option value="genero" selected disabled>Escolha uma opção...</option>
								<option value="Ação">Ação</option>
								<option value="Ficção">Ficção</option>
								<option value="Aventura">Aventura</option>
								<option value="Romance">Romance</option>
								<option value="Biografia">Biografia</option>
								<option value="HQ/Mangá">HQ/Mangá</option>
								<option value="Didáticos">Didáticos</option>
								<option value="Literatura Brasileira">Literatura Brasileira</option>
								<option value="Poesia">Poesia</option>
								<option value="Literatura Estrangeira">Literatura Estrangeira</option>
								<option value="Terror">Terror</option>
								<option value="Outros">Outros</option>
							</select>
						</div>

						<div class="form-group col-md-6">
							<label>Estado:</label>
							<select name="estado" class="form-control" required>
								<option value="estado" disabled selected>Escolha uma opção...</option>
								<option value="Novo">Novo</option>
								<option value="Conservado">Usado</option>
								<option value="Usado">Desgastado</option>
							</select>
						</div>
					</div>
					<button type="submit" class="btn btn-outline-primary col-md-5 ml-1 my-2">Adicionar Livro</button>
				</form>
		</div>
	</div>

	<!-- Espaço destinado as fotos dos livros -->
	<!-- <div class="cards">
	<div class="card" style="width: 18rem;">
	  <img class="card-img-top" src=".." alt="Card image cap">
	  <div class="card-body">
	    <h5 class="card-title">Capa</h5>
	    
	  </div>
	</div>

	<div class="card" style="width: 18rem;">
	  <img class="card-img-top" src="..." alt="Card image cap">
	  <div class="card-body">
	    <h5 class="card-title">Contracapa</h5>
	    
	  </div>
	</div>

	<div class="card" style="width: 18rem;">
	  <img class="card-img-top" src="..." alt="Card image cap">
	  <div class="card-body">
	    <h5 class="card-title">Verso</h5>
	  </div>
	</div>
</div> -->

</body>

</html>