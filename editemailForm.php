<?php require 'php/init.php'; ?>
<?php if (isset($_SESSION['usuario'])): ?>
	<?php $id = $_GET['id']  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Editar Email</title>
</head>
<body>

<form action="php/editEmail.php?id=<?= $id ?>" method="POST">
   <label>Email Atual:<input type="text" name="atual" placeholder="Email Atual" required></label>
	<label>Novo Email:<input type="text" name="novo" placeholder="Novo Email" required></label>
	<label>Confirmar Novo Email:<input type="text" name="confirm" placeholder=" Confirmar Novo Email" required></label>
	<input type="submit" value="Confirmar">
</form>

<a href="perfilConfig.php">Voltar</a>

</body>
</html>
<?php else: ?>

<h1>Area Restrita</h1>

<?php endif ?>