<?php 
require 'init.php';

$atual = $_POST['nome'];
$novo = $_POST['novo'];

$user= $_SESSION['usuario'];

$id= $_GET['id'];



   require '../conect.php';

  $stmt = $con->prepare("SELECT * FROM usuario WHERE id =?");
  $stmt->execute([$id]);


if($stmt->rowCount() > 0 && $stmt->fetch()['nome'] == $user) {
   $stmt = $con->prepare("
       UPDATE usuario SET nome= ? WHERE  id=?
       ");
   $stmt->execute([$user,$id]);
   }



header('location:perfil.php');




 ?>