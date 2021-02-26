
<?php  require 'php/init.php'; ?>
<?php if(isset($_SESSION['usuario'])): ?>

<?php 
include 'conect.php';

$usuario = $_SESSION['usuario'];
$id_sessao = (int) $_SESSION['id'];

$stmt = $con->prepare("SELECT * FROM usuario WHERE id = ?");
$stmt->execute([$id_sessao]);
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
 	<tr>
 		<th>Nome de Usuario</th>
 		
 	</tr>
 </table>
<table>
	<tr>
		<td><?= $user['nome'] ?></td>
		<td><a href="editnomeForm.php?id=<?= $user['id']?>">editar</a></td>
	</tr>
</table>

 <table>
 	<tr>
 		<th>Email</th>
 		
 	</tr>
 </table>
<table>
	<tr>
		<td><?= $user['email'] ?></td>
		<td><a href="editemailForm.php?id=<?= $user['id']?>">editar</a></td>
	</tr>
</table>


 <table>
 	<tr>
 		<th>Senha</th>
 		
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