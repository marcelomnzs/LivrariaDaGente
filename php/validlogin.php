<!-- tentando validar o login -->

<?php require_once 'init.php' ?>

<?php
include '../conect.php';

if($_POST){
	$encontrado = 0;
	$usuario = $_POST['nomeUsuario'];
	$login_email = $_POST['emaillogin'];
	$login_senha = $_POST['senhalogin'];

	if($login_email === ""){
		echo  "<script>alert('Campo de email não foi preenchido, tente novamente!');</script>";
		header("Refresh: 0; url = /php/login.php");

	}
	else if($login_senha === ""){
		echo  "<script>alert('Campo senha não foi preenchido, tente novamente!');</script>";
		header("Refresh: 0; url = /php/login.php");
	}else{

		$livraria = $con -> prepare("SELECT email, nome FROM usuario WHERE email=? AND senha=?;"); 
		$livraria -> bindParam(1,$login_email);
		$livraria -> bindParam(2,$login_senha);
		$livraria -> execute();
		$f = $livraria -> fetch();
		
		if($f["email"] != null){
			$_SESSION['usuario'] = $f["nome"]; 
			header("Refresh: 0; url = perfil.php");

			$encontrado = 1;
		}else{
			echo "<script>alert('Email ou senha incorreto!');</script>";

			header("Refresh: 0; url = login.php");
			exit;

		}
	}
	if($encontrado == 0){
		echo "<script>alert('Email não cadastrado');</script>";
		header("Refresh: 0; url = login.php");
	}
}
?>