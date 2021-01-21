<?php
$cadastrados = file('cadastro.csv');
for ($i = 0; $i < sizeof($cadastrados); $i++){
	$cadastrados[$i] = explode(';',$cadastrados[$i]);
}
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
		}else{
			for($i = 0; $i < sizeof($cadastrados); $i++){	
				if ($email === $cadastrados[$i][1]){
					echo  "<script>alert('Email já cadastrado, faça seu login');</script>";
					header("Refresh: 0; url = login.php");
					exit;
				}
			}
			if($senha === $confirma){

				echo  "<script>alert('Cadastro criado com Sucesso!');</script>";
				$fp = fopen('php/cadastro.csv', 'a'); 
				fwrite($fp, $_POST['nomeUsuario'] . ";" . $_POST['email'] . ";". $_POST['senha'] . ";" . $_POST['confirma'] .";\n");
				fclose($fp);
				header("Refresh: 0; url = login.php");

			}
			else{
				echo  "<script>alert('Senhas diferentes, refaça seu cadastro');</script>";
				header("Refresh: 0; url = cadastro.php");	
			}
		}
	}
}
?>