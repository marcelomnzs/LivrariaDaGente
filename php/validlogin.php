<!-- tentando validar o login -->

<?php
$cadastrados = file('cadastro.csv');
for ($i = 0; $i < sizeof($cadastrados); $i++){
	$cadastrados[$i] = explode(';',$cadastrados[$i]);
}

if($_POST){
	$encontrado = 0;
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
		for($i = 0; $i < sizeof($cadastrados); $i++){	
			if($login_email === $cadastrados[$i][1]){
				if ($login_senha === $cadastrados[$i][2]){
					echo "<script>alert('acesso liberado');</script>";
					header("Refresh: 0; url = perfil.php");


					$encontrado = 1;
				}else{
					echo "<script>alert('senha incorreta');</script>";
					header("Refresh: 0; url = login.php");
					exit;

				}
			}
		}
		if($encontrado == 0){
			echo "<script>alert('Email não cadastrado');</script>";
			header("Refresh: 0; url = login.php");
		}
	}
}
?>