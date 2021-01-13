<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cadastro</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="cadastro.css">
 
</head>
<body>
  <img src="logo.png">
<div class="container">
  <form>
    <div id="usuario">
      <label for="nome">Nome de Usuário:</label>
      <input type="nome" class="form-control" id="nome" placeholder="Nome de Usuário" name="nome">
    </div>
    <div id="email">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="ex@gmail.com" name="email">
    </div>
    <div id="senha">
      <label for="senha">Senha:</label>
      <input type="senha" class="form-control" id="senha" placeholder="Senha" name="senha">
    </div>
    <div id="confirmar-senha">
      <label for="senha">Confirmar Senha:</label>
      <input type="senha" class="form-control" id="senha" placeholder="confirmar senha" name="senha">
    </div>
    <button type="submit" class="btn">Cadastrar-se</button>
  </form>
  <h4>Já é cadastrado? Clique <a href="#">aqui!</a></h4>
</div>

</body>
</html>
