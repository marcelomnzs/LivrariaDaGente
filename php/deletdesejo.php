<?php
	include 'init.php';
	include '../conect.php';
	$livro_id =(int) $_GET['id'];
	$user_id = $_SESSION['id'];

	$stmt = $con ->prepare("SELECT * from listaDeDesejos WHERE id = ?;");
	$stmt->execute([$livro_id]);
	$resul = $stmt->fetch();
	

	if ($stmt->rowCount() > 0 && $resul['usuario_id'] == $user_id) {
		$stmt = $con->prepare("DELETE FROM listaDeDesejos WHERE id = ?");
		$stmt->execute([$livro_id]);
	}
	header('location: listaDesejos.php');
?>