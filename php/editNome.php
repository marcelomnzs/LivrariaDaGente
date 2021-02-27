<?php 
require 'init.php';

$atual = $_POST['nome'];
$novo = $_POST['novo'];


$id = $_GET['id'];



if ($atual == $novo ) {
	echo "<script>alert('Digite um nome diferente do atual');</script>";
} else {
   
   require '../conect.php';

  $stmt = $con->prepare("SELECT nome FROM usuario WHERE id =?");
  $stmt->execute([$id]);


if($stmt->rowCount() > 0 && $stmt->fetch()['nome'] == $id) {
   $stmt = $con->prepare("
       UPDATE nome FROM usuario SET nome=? WHERE  id=?
       ");
   $stmt->execute([$nome,$id]);
   }

}

header('location:perfil.php');




 ?>