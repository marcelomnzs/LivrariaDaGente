<?php require 'init.php'; ?>

<?php if (isset($_SESSION['usuario'])): ?>

<?php $id_livro = $_GET['id']; 

    include '../conect.php';

    $usuario = $_SESSION['usuario'];

    //Read da Tabela de Livros
    $stmt = $con->prepare("SELECT * FROM livro WHERE id = ? ;");
    $stmt->execute([$id_livro]);
    $livros = $stmt->fetch();
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
                <input type="text" name="titulo" class="form-control" placeholder="Nome do Livro" value="<?= $livros['titulo'] ?>">
            </div>

            <div class="col-md-4 mb-3">
                <label>Autor:</label>
                <input type="text" name="autor" class="form-control" placeholder="Autor" value="<?= $livros['autor'] ?>">
            </div>

            <div class="col-md-4 mb-3">
                <label>Subtitulo:</label>
                <input type="text" name="subtitulo" class="form-control" placeholder="Subtitulo" value="<?= $livros['subtitulo'] ?>">
            </div>
            
            <div class="col-md-6 mb-3">
                <label>Isbn:</label>
                <input type="text" name="isbn" class="form-control" placeholder="Isbn" value="<?= $livros['isbn'] ?>">
            </div>

            <div class="col-md-6 mb-3">
                <label>Edicao:</label>
                <input type="text" name="edicao" class="form-control" placeholder="Edição" value="<?= $livros['edicao'] ?>">
            </div>

            <div class="col-md-6 mb-3">
                <label>Gênero:</label>
                <input type="text" name="genero" class="form-control" placeholder="Gênero" value="<?= $livros['genero'] ?>">
            </div>
            
            <div class="col-md-6 mb-3">
                <label>Estado:</label>
                <input type="text" name="estado" class="form-control" placeholder="Estado" value="<?= $livros['estado'] ?>">
            </div>
            <!-- <input type="hidden" name="id"> -->
            <button class="btn btn-primary float-end " role="button" type="Submit">Enviar</button>
        </div>
    </form>
</body>
</html>

<?php else: ?>

<?php header("location:login.php"); ?> 

<?php endif ?>