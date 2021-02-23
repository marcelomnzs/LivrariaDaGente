<!DOCTYPE html>
<html>
<head>
	<title>Adicionar Livro</title>
	<link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-96x96.png">
	<link rel="stylesheet" href="../css/addlivro.css">
	<?= include "linksbootstrap.php";?>

</head>
<body>
	<form class="login-wrap" action="validlivro.php" method="POST">
	  <div class="form-row">
	    <div class="col-md-4 mb-3">
	      <label for="validationDefault01">Nome</label>
	      <input type="text" class="form-control" id="validationDefault01" name="nome" placeholder="Título do Livro" required>
	    </div>
	    <div class="col-md-4 mb-3">
	      <label for="validationDefault02">Autor</label>
	      <input type="text" class="form-control" id="validationDefault02" name="autor" placeholder="Autor" required>
	    </div>
	    <div class="col-md-4 mb-3">
	      <label for="validationDefault02">SubTitulo</label>
	      <input type="text" class="form-control" id="validationDefault02" name="subtitulo" placeholder="SubTitulo" maxlength="100" required>
	    </div>
	    <div class="col-md-6 mb-3">
	      <label for="validationDefault02">ISBN</label>
	      <input type="text" class="form-control" id="validationDefault02" name="isbn" placeholder="ISBN ou ASIN" required>
	    </div>
	    <div class="col-md-6 mb-3">
	      <label for="validationDefaultUsername">Edição</label>
	      <div class="input-group">
	        <input type="number" class="form-control" min="1" max="999" name="edicao" placeholder="Edição do Livro" required>
	      </div>
	    </div>
	  </div>
	  <div class="form-row">
	    <div class="col-md-6 mb-3">
	      <label for="validationDefault03">Gênero</label>
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
	    <div class="col-md-6 mb-3">
	      <label for="validationDefault04">Estado</label>
		  <select name="estado" class="form-control" required >
				<option value="estado" disabled selected>Estado</option>
				<option value="Novo">Novo</option>
				<option value="Conservado">Usado</option>
				<option value="Usado">Desgastado</option>
			</select>
	    </div>
	  </div>

	  <button class="btn btn-primary" type="submit" value="Adicionar">Adicionar Livro</button>
</form>

<!-- Espaço destinado as fotos dos livros -->
<div class="cards">
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
</div>

</body>
</html>