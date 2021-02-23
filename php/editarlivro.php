<?php 
require 'init.php';

if(!isset($_SESSION['usuario'])){ 
	header('location:login.php');
	exit();
 }


$titulo= $_POST['titulo'];
$autor= $_POST['autor'];
$genero= $_POST['genero'];
$subtitulo= $_POST['subtitulo'];
$edicao= $_POST['edicao'];
$isbn= $_POST['isbn'];
$estado= $_POST['estado'];
$valor=100;


$livro_id=$_GET['id'];
$usuario_id=$_SESSION['id'];



require '../conect.php';

$stmt=$con->prepare("SELECT * FROM livro WHERE id=?");
$stmt->execute([$livro_id]);


if($stmt->rowCount() > 0 && $stmt->fetch()['usuario_id'] == $usuario_id) {
   $stmt = $con->prepare("
       UPDATE livro SET titulo=?,autor=?,genero=?,subtitulo=?,edicao=?,isbn=?,estado=?,valor=? WHERE usuario_id =? AND id=?
       ");
   $stmt->execute([$titulo,$autor,$genero,$subtitulo,$edicao,$isbn,$estado,$valor,$usuario_id,$livro_id]);
   }



header('location:livroscadastrados.php');
 ?>