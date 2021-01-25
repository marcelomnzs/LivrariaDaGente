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
<input type="text" name="edicao" placeholder="Edição" maxlength="10">
<select name="genero">
	<option value="genero" selected>Gênero</option>
	<option value="acao">Ação</option>
	<option value="ficcao">Ficção</option>
	<option value="aventura">Aventura</option>
	<option value="romance">Romance</option>
	<option value="biografia">Biografia</option>
	<option value="hq">HQ</option>
	<option value="manga">Mangá</option>
	<option value="didaticos">Didáticos</option>
	<option value="literatura">Literatura Brasileira</option>
	<option value="poesia">Poesia</option>
	<option value="literatura">Literatura Estrangeira</option>
	<option value="terror">Terror</option>
	<option value="outros">Outros</option>
</select>
<select name="estado">
	<option value="estado">Estado</option>
	<option value="novo">Novo</option>
	<option value="usado">Usado</option>
	<option value="desgastado">Desgastado</option>
	</select>
<input type="submit" value="Adicionar">
</fieldset>
</form>


</body>
</html>