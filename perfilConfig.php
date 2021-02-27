
<?php  require 'php/init.php'; ?>
<?php if(isset($_SESSION['usuario'])): ?>


<?php 
include 'conect.php';

$usuario = $_SESSION['usuario'];
$id = (int) $_SESSION['id'];

$stmt = $con->prepare("SELECT * FROM usuario WHERE id = ?");
$stmt->execute([$id]);
$users = $stmt->fetchAll();





 ?>

<?php foreach ($users as $user) : ?>



 <!DOCTYPE html>
 <html>
 <head>
 	<title>Meu Perfil</title>
 </head>
 <body>
 
 <table>
 	<th>Nome de Usuario:</th>
 </table>
 <table>
 	<tr>
 		<form action="/php/editNome.php?id=<?= $id?>" method="POST">
 			<td><input type="text" name="nome" value="<?= $user['nome']?>"></td>
 			<td><label>Novo Nome:<input type="text" name="novo" required></label></td>
 			<td><input type="submit" value="confirmar"></td>

 		</form>
 	</tr>
 </table>

  <table>
 	<th>E-mail:</th>
 </table>
 <table>
 	<tr>
 		<form action="/php/editEmail.php?id=<?= $id?>" method="POST">
 			<td><input type="text" name="email" value="<?= $user['email']?>"></td>
 			<td><label>Novo E-mail:<input type="text" name="novomail" required></label></td>
 			<td><input type="submit" value="confirmar"></td>

 		</form>
 	</tr>
 </table>

 <table>
 	<tr>
 		<th>Senha:</th>
 		
 	</tr>
 </table>
<table>
	<tr><form action="php/editSenha.php" method="POST">
	<td><label>Senha Atual:<input type="password" name="senha" placeholder="Senha Atual" required></label></td>
	<td><label>Senha Nova:<input type="password" name="nova" placeholder="Senha Nova" required></label></td>
<td><label>Confirmar Senha Nova:<input type="password" name="confirmar" placeholder="Confirmar Senha Nova" required></label></td>
<td><input type="submit" value="Confirmar"></td>


</form></tr>
</table>


<a href="php/perfil.php">Voltar</a>

 </body>
 </html>
<?php endforeach ?>

<?php else: ?>

<h1>Area Restrita</h1>
<?php endif ?>