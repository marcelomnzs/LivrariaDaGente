<?php 
include './conect.php';

$titulo= $_POST['nome'];
$subtitulo= $_POST['subtitulo'];
$autor= $_POST['autor'];
$genero= $_POST['genero'];
$edicao= $_POST['edicao'];
$estado= $_POST['estado'];
$isbn= $_POST['isbn'];
$usuario_id = 1;
$valor = 100.00;

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

	$stmt = $con -> prepare("INSERT INTO livro (titulo,subtitulo,autor,genero,edicao,estado,isbn,valor,usuario_id) VALUES(?,?,?,?,?,?,?,?,?);");

	$stmt -> bindParam(1,$titulo);
	$stmt -> bindParam(2,$subtitulo);
	$stmt -> bindParam(3,$autor);
	$stmt -> bindParam(4,$genero);
	$stmt -> bindParam(5,$edicao);
	$stmt -> bindParam(6,$estado);
	$stmt -> bindParam(7,$isbn);
	$stmt -> bindParam(8,$valor);
	$stmt -> bindParam(9,$usuario_id);
	
	$stmt -> execute();

	header("Refresh: 0; url = livroscadastrados.php");

} 
?> 