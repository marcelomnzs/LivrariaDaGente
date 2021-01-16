<?php
if($_POST){
	$nome = $_POST['nomeUsuario'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$confirma = $_POST['confirma'];

	if($nome === ""){
		echo  "<script>alert('Campo nome de usuario não foi preenchido, refaça seu cadastro');</script>";
	}
	else if($email === ""){
		echo  "<script>alert('Campo email não foi preenchido, refaça seu cadastro');</script>";
	}else{

		if($senha === ""){
			echo  "<script>alert('Campo senha não foi preenchido, refaça seu cadastro');</script>";
		}
		else if($confirma === ""){
			echo  "<script>alert('Campo confirmar senha não foi preenchido, refaça seu cadastro');</script>";
		}
		else if($senha === $confirma){
			
			echo  "<script>alert('Cadastro criado com Sucesso!');</script>";
			$fp = fopen('cadastro.csv', 'a'); 
			fwrite($fp, $_POST['nomeUsuario'] . ";" . $_POST['email'] . ";". $_POST['senha'] . ";" . $_POST['confirma'] .";\n");
			fclose($fp);
		}
		else{
			echo  "<script>alert('Senhas diferentes, refaça seu cadastro');</script>";	
		}
	}
}
?>