<?php 
require 'init.php';

$nome = $_POST['nome'];
$user= $_SESSION['usuario'];
$email = $_POST['email'];
$senha=$_POST['senha'];
$new_senha=$_POST['newSenha'];

$id= $_GET['id'];

   require '../conect.php';

if($senha===$new_senha){ 

  $stmt = $con->prepare("SELECT * FROM usuario WHERE id =?");
  $stmt->execute([$id]);
if($stmt->rowCount() > 0) {
   $stmt = $con->prepare("
       UPDATE usuario SET nome= ?, email= ?, senha=? WHERE  id=?
       ");
   $stmt->execute([$nome,$email,$new_senha,$id]);
   $_SESSION['usuario']=$nome;

   }
	header('location:perfil.php');
}
   else {
  	echo '<script>alert("Senhas diferentes");</script>';
  	header('refresh:0;../perfilConfig.php');
   }



 ?>