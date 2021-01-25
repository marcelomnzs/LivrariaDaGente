<?php 

$livro= file('livros.csv');
for ($i=0; $i < sizeof($livro); $i++) { 
	$livro[$i] = explode(',', $livro[$i]);
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Meu Acervo</title>
</head>
<body>

	<h1>Meu Acervo</h1>
	<h2>Livros Adicionados</h2>

	<table>
		<tr>
			<th>Nome Do Livro</th>
			<th>Autor</th>
			<th>Edição</th>
			<th>Gênero</th>
			<th>Estado</th> 	
		</tr>
		<?php foreach ($livro as $linha => $liv): ?>
			<tr>		   	
				<td><?= $liv[0] ?></td>
				<td><?= $liv[1] ?></td>
				<td><?= $liv[2] ?></td>
				<td><?= $liv[3] ?></td>
				<td><?= $liv[4] ?></td>
				<td><a href="deletlivros.php?linha=<?= $linha ?>">Deletar Livro</a></td>
			</tr>
			
		<?php endforeach ?>
	</table>

	<a href="addlivro.php">Adicionar Livro</a>

</body>
</html>