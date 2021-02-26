<?php require 'php/init.php'; ?>
<?php if (isset($_SESSION['usuario'])): ?>

<?php $id = $_GET['id']  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Editar Nome</title>
</head>
<body>

<form action="php/editNome.php?id=<?= $id ?>" method="POST">
   <label>Nome Atual:<input type="text" name="atual" placeholder="Nome Atual" required></label>
	<label>Novo Nome:<input type="text" name="novo" placeholder="Novo Nome" required></label>
	<input type="submit" value="Confirmar">
</form>
<a href="perfilConfig.php">Voltar</a>


</body>
</html>
<?php else: ?>

<h1>Area Restrita</h1>

<?php endif ?>