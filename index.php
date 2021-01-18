<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-96x96.png">
    <title>Livraria da Gente</title>
</head>
<body>
    <header>
        <div id="navbar">
            <a href="index.php"><img src="img/logo.png" alt="Logo Livraria da Gente" id="logo"></a>
            <a id="cadastrar" href="php/cadastro.php">Cadastrar</a>
            <h4 id="entrar"><a href="php/login.php">Entrar</a></h4>
        </div>
    </header>
    <!-- Carrossel -->
    <ul class="slider">
        <li>
            <input type="radio" id="slide1" name="slide" checked>
            <label for="slide1"></label>
            <img src="img/Carrossel1.png" alt="A livraria da Gente tem o objetivo de difundir a leitura para todos!">
        </li>
        <li>
        <input type="radio" id="slide2" name="slide">
            <label for="slide2"></label>
            <img src="img/Carrossel2.png" alt="Feliz dia do Livro">
        </li>
        <li>
            <input type="radio" id="slide3" name="slide">
            <label for="slide3"></label>
            <img src="img/Carrossel3.png" alt="Uma livraria feita por você, para você!">
        </li>
    </ul>

    
        <footer id="rodape">
            <img src="img/pagecoin.png" alt="Pagecoins" id="pagecoin" class="botoes">
            <img src="img/acervo.png" alt="Acervo da Gente" id="acervo" class="botoes">
            <img src="img/sobre.png" alt="Sobre" id="sobre" class="botoes">
        </footer>
</body>
</html>