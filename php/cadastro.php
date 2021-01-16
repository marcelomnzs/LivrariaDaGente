<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Livraria da Gente</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/cadastro.css">
    <!-- Link para o ícone da aba -->
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-96x96.png">
  </head>
  <body>
    <img src="../img/Triângulo.png" alt="Detalhes de Triângulos Azuis" id="triangulos">
    <img src="../img/logo-login.png" alt="Logo da Livraria da Gente" id="logo">
      <form action="dados.php" method="POST">
        <!-- A classe campo é relativo à os todos os campos de entrada -->
        <div class="campo">  
          <label for="text" id="usuario">Nome de Usuário:</label>
          <input type="text" id="usuario" placeholder="Ex: João Silva" name="nomeUsuario">
        </div>
        <div class="campo">  
            <label for="email" id="email">E-mail:</label>
            <input type="email" id="email" placeholder="example@email.com" name="email">
        </div>
        <div class="campo">
          <label for="pwd" id="senha">Senha:</label>
          <input type="password" id="senha" placeholder="Digite sua Senha" name="senha">
        </div>
        <div class="campo">  
          <label for="pwd" id="confirma">Confirme sua Senha:</label>
          <input type="password" id="confirma" placeholder="Confirme sua Senha" name="confirma">
        </div>
        <button type="submit" class="btn">ENTRAR</button>
      </form>
      <h5>Já é cadastrado? <a href="../login.php">Entrar</a></h5>
  </body>
</html>
