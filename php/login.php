<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Livraria da Gente</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/login.css">
    <!-- Link para o ícone da aba -->
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-96x96.png">
  </head>
  <body>
    <img src="../img/Triângulo.png" alt="Detalhes de Triângulos Azuis" id="triangulos">
    <a href="../index.php"><img src="../img/logo-login.png" alt="Logo da Livraria da Gente" id="logo"></a>
      <form action="validlogin.php" method="POST">
        <!-- A classe campo é relativo à os todos os campos de entrada -->
        <div class="campo">  
          <label for="email" id="email">E-mail:</label>
          <input type="email" id="email" placeholder="example@email.com" name="emaillogin">
        </div>
        <div class="campo">
          <label for="pwd" id="senha">Senha:</label>
          <input type="password" id="senha" placeholder="Digite sua Senha" name="senhalogin">
        </div>
        <a href="validlogin.php"><button type="submit" class="btn">ENTRAR</button></a>
      </form>
      <h5>Ainda não é cadastrado? Cadastre-se <a href="cadastro.php">aqui!</a></h5>
  </body>
</html>
