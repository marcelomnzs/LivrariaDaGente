<head>
	<title>Pesquisar Livros</title>
	<link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-96x96.png">
	<link rel="stylesheet" href="../css/addlivro.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>


<?php require 'init.php'; ?>
<form action="pesquisar.php" method="POST">
	<input type="text" name="pesquisar" placeholder="Nome" required>
	<input type="submit" value="Pesquisar">
</form>