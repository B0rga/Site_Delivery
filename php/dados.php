	<?php

	include "conexao.php";
	
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$cpf = $_POST["cpf"];
	$senha = $_POST["senha"];
	
	$sql->query("insert into usuario(usu_cod, usu_nome, usu_email, usu_cpf, usu_senha) 
	values(null, '$nome','$email','$cpf','$senha')");
		
		
	header ("Location: ../html/principal.html")
?>


