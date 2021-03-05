<?php
	include 'init.php';
	include '../conect.php';
	$id_livro =(int) $_GET['id'];
	$user_id = $_SESSION['id'];

	$stmt = $con ->prepare("SELECT * from livro WHERE id = ?;");
	$stmt->execute([$id_livro]);
	$resul = $stmt->fetch();
	

	if ($stmt->rowCount() > 0 && $resul['usuario_id'] == $user_id) {
		$stmt = $con->prepare("DELETE FROM livro WHERE id = ?");
		$stmt->execute([$id_livro]);
	}
	header('location: livroscadastrados.php');
?>