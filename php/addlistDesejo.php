<?php 
	include 'init.php';
	include './conect.php';


	$id_livro =(int) $_GET['id'];
	$user_id = $_SESSION['id'];


	$stmt = $con -> prepare("INSERT INTO listaDeDesejos (livro_id,usuario_id) VALUES(?,?);");
	$stmt->execute([$id_livro,$user_id]);

	header('location:listaDesejos.php');






 ?>