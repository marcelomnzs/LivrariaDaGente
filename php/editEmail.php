<?php 
require 'init.php';

$atual = $_POST['email'];
$novo = $_POST['novomail'];

$user= $_SESSION['usuario'];

$id= $_GET['id'];



   require './conect.php';

  $stmt = $con->prepare("SELECT * FROM usuario WHERE id =?");
  $stmt->execute([$id]);

if($stmt->rowCount() > 0 && $stmt->fetch()['email'] == $atual) {
   $stmt = $con->prepare("
       UPDATE usuario SET email= ? WHERE  id=?
       ");
   $stmt->execute([$novo,$id]);
   $atual=$novo;
   }



header('location:perfil.php');




 ?>