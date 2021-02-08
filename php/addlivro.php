<!DOCTYPE html>
<html>
<head>
	<title>Adicionar Livro</title>
	<link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-96x96.png">
	<link rel="stylesheet" href="../css/addlivro.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>
<body>
	<!-- <img src="../img/fundoAddLivro.jpg" alt="Estante de Livros"> -->
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
  <div class="form-row abaixo">
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
		<div class="fotos">
			<input type="file" accept="image/" id="foto">
			<input type="file" accept="image/" id="foto">
			<input type="file" accept="image/" id="foto">
		</div>
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


<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

  <!-- <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab">Forgot Password</label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Username or Email</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In">
				</div>
				<div class="hr"></div>
			</div>
			<div class="for-pwd-htm">
				<div class="group">
					<label for="user" class="label">Username or Email</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Reset Password">
				</div>
				<div class="hr"></div>
			</div>
		</div>
	</div>
</div> -->







<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>