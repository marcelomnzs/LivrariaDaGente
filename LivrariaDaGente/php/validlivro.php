<?php 
$nome_livro= $_POST['nome'];
$autor= $_POST['autor'];
$edicao= $_POST['edicao'];
$genero= $_POST['genero'];
$estado= $_POST['estado'];



if ($nome_livro == "") {
  echo "preencha o nome do livro";
} else if ($autor == "" ) {
   echo "preencha o nome autor";
} else if ($edicao == "") {
   echo "preencha a edição";
} else if ($genero == "genero") {
  echo "preencha genero";
} else if ($estado == "estado") {
 echo "preencha estado";
} else {

	$livro= implode(',',[$nome_livro, $autor, $edicao, $genero, $estado])."\n";
	$fp= fopen('livros.csv', 'a');
	fwrite( $fp ,$livro);
	fclose($fp);
  echo  "<script>alert('Livro adicionado com sucesso!');</script>";
header("Refresh: 0; url = livroscadastrados.php");
    
} 





?> 