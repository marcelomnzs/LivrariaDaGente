<?php 
$nome_livro= $_POST['nome'];
$autor= $_POST['autor'];
$edicao= $_POST['edicao'];
$genero= $_POST['genero'];
$estado= $_POST['estado'];
$subtitulo= $_POST['subtitulo'];
$isbn= $_POST['isbn'];
$meulivro=file('livros.csv');

for ($i=0; $i <sizeof($meulivro) ; $i++) { 
	$meulivro[$i]=explode(',', $meulivro[$i]);
} 
for($i = 0; $i < sizeof($meulivro); $i++){	
	if ($nome_livro == $meulivro[$i][0]){
		echo  "<script>alert('Livro já cadastrado!');</script>";
		header("Refresh: 0; url = livroscadastrados.php");
		exit;
	} 
}

if ($nome_livro == "") {
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

	$livro= implode(',',[$nome_livro, $autor, $subtitulo, $edicao, $isbn, $genero, $estado])."\n";
	$fp= fopen('livros.csv', 'a');
	fwrite($fp, $livro);
	fclose($fp);
	echo  "<script>alert('Livro adicionado com sucesso!');</script>";
	header("Refresh: 0; url = livroscadastrados.php");

} 
?> 