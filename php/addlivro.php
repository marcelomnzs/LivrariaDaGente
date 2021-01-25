<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="validlivro.php" method="POST">
<fieldset>
<legend>Adicionar Livro</legend>		
<input type="text" name="nome" placeholder="Nome" maxlength="45">
<input type="text" name="autor" placeholder="Autor" maxlength="25">
<input type="number" min="1" max="999" name="edicao" placeholder="Edição" >
<select name="genero">
	<option value="genero" selected>Gênero</option>
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
<select name="estado">
	<option value="estado">Estado</option>
	<option value="Novo">Novo</option>
	<option value="Conservado">Usado</option>
	<option value="Usado">Desgastado</option>
	</select>
<input type="submit" value="Adicionar">
</fieldset>
</form>


</body>
</html>