<?php 
include '../conect.php';

$titulo= $_POST['titulo'];
$autor= $_POST['autor'];
$genero= $_POST['genero'];
$subtitulo= $_POST['subtitulo'];
$edicao= $_POST['edicao'];
$isbn= $_POST['isbn'];
$estado= $_POST['estado'];
$valor = 100.00;
$usuario_id = 1;

if ($titulo == "") {
	echo  "<script>alert('Preencha o nome do livro');</script>";
	header("Refresh: 0; url = addlivro.php");
} else if ($autor == "" ) {
	echo  "<script>alert('Preencha o nome do autor do livro');</script>";
	header("Refresh: 0; url = addlivro.php");
} else if ($edicao == "") {
	echo  "<script>alert('Preencha a edição do livro');</script>";
	header("Refresh: 0; url = addlivro.php");
} else if ($genero == "genero") {
	echo  "<script>alert('Preencha o gênero do livro');</script>";
	header("Refresh: 0; url = addlivro.php");
} else if ($estado == "estado") {
	echo  "<script>alert('Preencha o estado do livro');</script>";
	header("Refresh: 0; url = addlivro.php");
} 
else {

	$stmt = $con -> prepare("INSERT INTO livro (titulo,autor,genero,subtitulo,edicao,isbn,estado,valor,usuario_id) VALUES(?,?,?,?,?,?,?,?,?);");

	$stmt -> bindParam(1,$titulo);
	$stmt -> bindParam(2,$autor);
	$stmt -> bindParam(3,$genero);
	$stmt -> bindParam(4,$subtitulo);
	$stmt -> bindParam(5,$edicao);
	$stmt -> bindParam(6,$isbn);
	$stmt -> bindParam(7,$estado);
	$stmt -> bindParam(8,$valor);
	$stmt -> bindParam(9,$usuario_id);
	
	$stmt -> execute();

	header("Refresh: 0; url = livroscadastrados.php");

} 
?> 