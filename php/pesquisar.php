<?php 


$pesquisa= $_POST['pesquisar'];




require '../conect.php';



$stmt = $con->prepare("SELECT * FROM livro WHERE titulo LIKE :pesquisa OR autor LIKE :pesquisa OR genero LIKE :pesquisa OR subtitulo LIKE :pesquisa  OR edicao LIKE :pesquisa OR isbn LIKE :pesquisa OR estado LIKE :pesquisa OR valor LIKE :pesquisa");
$stmt->execute(['pesquisa' => "%$pesquisa%"]);

while ($livros = $stmt->fetch()){
 echo "Nome do Livro: ". $livros['titulo'] ."<br>";
} 



?>
