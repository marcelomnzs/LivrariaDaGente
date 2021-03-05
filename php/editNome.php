<?php 
require 'init.php';

$nome = $_POST['nome'];
$user= $_SESSION['usuario'];
$email = $_POST['email'];


$id= $_GET['id'];

   require '../conect.php';


  $stmt = $con->prepare("SELECT * FROM usuario WHERE id =?");
  $stmt->execute([$id]);
if($stmt->rowCount() > 0) {
   $stmt = $con->prepare("
       UPDATE usuario SET nome= ?, email= ? WHERE  id=?
       ");
   $stmt->execute([$nome,$email,$id]);
   $_SESSION['usuario']=$nome;

   }








header('location:perfil.php');
 ?>