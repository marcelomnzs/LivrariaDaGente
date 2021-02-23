<?php require 'init.php'; ?>

<?php if (isset($_SESSION['usuario'])): ?>

<?php $id_livro = $_GET['id']; 

$nome = $_GET['nome'];
$autor= $_GET['autor'];
$genero = $_GET['genero'];
$subtitulo= $_GET['sub'];  
$edicao =$_GET['edicao']; 
$isbn =$_GET['isbn']; 
$estado =$_GET['estado']; 

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de livro</title>
    <link rel="stylesheet" href="../css/updateform.css">
    <?= include "linksbootstrap.php"?>
</head>
<body>
    <form action="editarlivro.php?id=<?=$id_livro?>" class="login-wrap" method="POST">
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label>Nome do Livro:</label>
                <input type="text" name="titulo" class="form-control" placeholder="Nome do Livro" value="<?= $nome ?>">
            </div>

            <div class="col-md-4 mb-3">
                <label>Autor:</label>
                <input type="text" name="autor" class="form-control" placeholder="Autor" value="<?= $autor ?>">
            </div>

            <div class="col-md-4 mb-3">
                <label>Subtitulo:</label>
                <input type="text" name="subtitulo" class="form-control" placeholder="Subtitulo" value="<?= $subtitulo ?>">
            </div>
            
            <div class="col-md-6 mb-3">
                <label>Isbn:</label>
                <input type="text" name="isbn" class="form-control" placeholder="Isbn" value="<?= $isbn ?>">
            </div>

            <div class="col-md-6 mb-3">
                <label>Edicao:</label>
                <input type="text" name="edicao" class="form-control" placeholder="Edição" value="<?= $edicao ?>">
            </div>

            <div class="col-md-6 mb-3">
                <label>Gênero:</label>
                <input type="text" name="genero" class="form-control" placeholder="Gênero" value="<?= $genero ?>">
            </div>
            
            <div class="col-md-6 mb-3">
                <label>Estado:</label>
                <input type="text" name="estado" class="form-control" placeholder="Estado" value="<?= $estado ?>">
            </div>
            <!-- <input type="hidden" name="id"> -->
            <button class="btn btn-primary float-end " role="button" type="Submit">Enviar</button>
        </div>
    </form>
</body>
</html>

<?php endif ?> 