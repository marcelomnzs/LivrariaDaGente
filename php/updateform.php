<?php require 'init.php'; ?>

<?php if (isset($_SESSION['usuario'])): ?>

<?php $id_livro = $_GET['id']; 

 $titulo= $_GET['titulo'];  
$autor= $_GET['autor'];
$genero = $_GET['genero'];
$subtitulo =$_GET['subititulo']; 

?>


<form action="editarlivro.php" method="POST">
<label>Nome do Livro:<input type="text" name="titulo" placeholder="Nome do Livro" value="<?= $titulo ?>"></label>     
<label>Autor<input type="text" name="autor" placeholder="Autor" value="<?= $autor ?>"></label>
<label>Gênero<input type="text" name="genero" placeholder="Gênero" value="<?= $genero ?>"></label>
<label>Subtitulo<input type="text" name="subtitulo" placeholder="Subtitulo" value=""></label>
<label>Edicao<input type="text" name="edicao" placeholder="Edição" value=""></label>
<label>Isbn<input type="text" name="isbn" placeholder="Isbn" value=""></label>
<label>Estado<input type="text" name="estado" placeholder="Estado" value=""></label>
<input type="hidden" name="id" value="<?=$id_livro?>">
<label>...<input type="submit" value="Salvar"></label>
</form>

<h3><a href="livroscadastrados.php">Ver Meus Livros</a></h3>
<?php endif ?> 