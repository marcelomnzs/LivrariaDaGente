<?php

 require_once 'php/init.php'; 

	include 'conect.php';


if($_POST){
	$nome = $_POST['nomeUsuario'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$confirma = $_POST['confirma'];

	if($nome === ""){
		echo  "<script>alert('Campo nome de usuario não foi preenchido, refaça seu cadastro');</script>";
		header("Refresh: 0; url = cadastro.php");
	}
	else if($email === ""){
		echo  "<script>alert('Campo email não foi preenchido, refaça seu cadastro');</script>";
		header("Refresh: 0; url = cadastro.php");
	}else{

		if($senha === ""){
			echo  "<script>alert('Campo senha não foi preenchido, refaça seu cadastro');</script>";
			header("Refresh: 0; url = cadastro.php");
		}
		else if($confirma === ""){
			echo  "<script>alert('Campo confirmar senha não foi preenchido, refaça seu cadastro');</script>";
			header("Refresh: 0; url = cadastro.php");
		}  else {
			/* FAZER VERIFICAÇÃO DO EMAIL*/
			if($senha === $confirma){

				$stmt = $con -> prepare("SELECT  email FROM usuario  WHERE email=?");
				$stmt -> bindParam(1,$email);
				$stmt -> execute();
				$f = $stmt -> fetch();

				if ($f['email'] != NULL) {
               		echo "email já existe";
            		header("Refresh: 0; url = php/cadastro.php");
					exit();
				}
				
				$stmt = $con -> prepare("INSERT INTO usuario (nome,email,senha) VALUES (?,?,?);");
				$stmt -> bindParam(1,$nome);
				$stmt -> bindParam(2,$email);
				$stmt -> bindParam(3,$senha);

				$stmt -> execute(); 
				header("location: php/login.php");

			}
			else{
				echo  "<script>alert('Senhas diferentes, refaça seu cadastro');</script>";
				header("Refresh: 0; url = php/cadastro.php");	
			}
		}

	}

}
