<?php
	global $con;

	try{
		$con = new PDO('mysql:host=localhost:3306;dbname=livrariaDaGente;chasert=utf8', 'root', '234779100a');
		$con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e){
		echo 'ERROR!';
		print_r($e);
	}

?>	