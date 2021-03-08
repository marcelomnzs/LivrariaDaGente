<?php require 'init.php'; ?>

<?php if (isset($_SESSION['usuario'])) : ?>

    <?php $id_livro = $_GET['id'];

    include './conect.php';

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
        <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-96x96.png">
        <?= include "linksbootstrap.php" ?>
    </head>

    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <h2 class="h3 my-5 page-title text-center">Edição de Informações</h2>
                    <div class="img-fluid col-md-3 float-right ">
                        <img src="../img/editarLivro.png" alt="Ilustração de personagem alterando as configurações do perfil">
                    </div>
                    <form action="editarlivro.php?id=<?= $id_livro ?>" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Nome:</label>
                                <input type="text" name="titulo" class="form-control" placeholder="Jogos Vorazes" value="<?= $livros['titulo'] ?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Subtítulo:</label>
                                <input type="text" name="subtitulo" class="form-control" placeholder="Em chamas" value="<?= $livros['subtitulo'] ?>" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Autor:</label>
                                <input name="autor" class="form-control" placeholder="Autor da Obra" value="<?= $livros['autor'] ?>" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>ISBN:</label>
                                <input name="isbn" class="form-control" placeholder="Apenas números" value="<?= $livros['isbn'] ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Edição:</label>
                                <input name="edicao" type="number" min="1" max="999" class="form-control" placeholder="Edição do Livro" value="<?= $livros['edicao'] ?>" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Gênero:</label>
                                <select name="genero" class="form-control" required>
                                    <option value="Ação" <?= ($livros['genero'] == 'Ação') ? 'selected' : '' ?>>Ação</option>
                                    <option value="Ficção" <?= ($livros['genero'] == 'Ficção') ? 'selected' : '' ?>>Ficção</option>
                                    <option value="Aventura" <?= ($livros['genero'] == 'Aventura') ? 'selected' : '' ?>>Aventura</option>
                                    <option value="Romance" <?= ($livros['genero'] == 'Romance') ? 'selected' : '' ?>>Romance</option>
                                    <option value="Biografia" <?= ($livros['genero'] == 'Biografia') ? 'selected' : '' ?>>Biografia</option>
                                    <option value="HQ/Mangá" <?= ($livros['genero'] == 'HQ/Mangá') ? 'selected' : '' ?>>HQ/Mangá</option>
                                    <option value="Didáticos" <?= ($livros['genero'] == 'Didáticos') ? 'selected' : '' ?>>Didáticos</option>
                                    <option value="Literatura Brasileira" <?= ($livros['genero'] == 'Literatura Brasileira') ? 'selected' : '' ?>>Literatura Brasileira</option>
                                    <option value="Poesia" <?= ($livros['genero'] == 'Poesia') ? 'selected' : '' ?>>Poesia</option>
                                    <option value="Literatura Estrangeira" <?= ($livros['genero'] == 'Literatura Estrangeira') ? 'selected' : '' ?>>Literatura Estrangeira</option>
                                    <option value="Terror" <?= ($livros['genero'] == 'Terror') ? 'selected' : '' ?>>Terror</option>
                                    <option value="Outros" <?= ($livros['genero'] == 'Outros') ? 'selected' : '' ?>>Outros</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Estado:</label>
                                <select name="estado" class="form-control" required>
                                    <option value="Novo" <?= ($livros['estado'] == 'Novo') ? 'selected' : '' ?>>Novo</option>
                                    <option value="Conservado" <?= ($livros['estado'] == 'Conservado') ? 'selected' : '' ?>>Usado</option>
                                    <option value="Usado" <?= ($livros['estado'] == 'Usado') ? 'selected' : '' ?>>Desgastado</option>
                                </select>
                            </div>
                            <input type="hidden" name="id">
                        </div>
                        <button type="submit" class="btn btn-outline-primary col-md-5 ml-1 my-2">Salvar Alterações</button>
                    </form>
    </body>

    </html>

<?php else : ?>

    <?php header("location:login.php"); ?>

<?php endif ?>