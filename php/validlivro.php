<?php 
include 'conect.php';

$titulo= $_POST['nome'];
$autor= $_POST['autor'];
$edicao= $_POST['edicao'];
$genero= $_POST['genero'];
$estado= $_POST['estado'];
$subtitulo= $_POST['subtitulo'];
$isbn= $_POST['isbn'];


if ($nome_livro == "") {
	echo  "<script>alert('Preencha o nome do livro'), 2000;</script>";
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

	$stmt = $con -> prepare("INSERT INTO livro (id, titulo, autor, genero, edicao, isbn, estado, valor, usuario_id, subtitulo, valor) VALUES(?,?,?,?,?,?,?,?,?,?,?)");

	$stmt = bindParam(1, $id);
	$stmt = bindParam(2, $titulo);
	$stmt = bindParam(3, $autor);
	$stmt = bindParam(4, $genero);
	$stmt = bindParam(5, $edicao);
	$stmt = bindParam(6, $isbn);
	$stmt = bindParam(7, $estado);
	$stmt = bindParam(8, $valor);
	$stmt = bindParam(9, $usuario_id);
	$stmt = bindParam(10, $subtitulo);
	$stmt = bindParam(11, $valor);

	$stmt = execute();

	echo  "<script>alert('Livro adicionado com sucesso!');</script>";
	header("Refresh: 0; url = livroscadastrados.php");

} 
?> 