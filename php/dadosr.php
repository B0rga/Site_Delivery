<?php

	include "conexao.php";

	$nomer = $_POST["nomer"];
	$telefoner = $_POST["telefoner"];
	$cnpj = $_POST["cnpj"];
	$enderecor = $_POST["enderecor"];
	$senhar = $_POST["senhar"];

	$sql->query("insert into restaurante(res_cod, res_nome, res_telefone, res_cnpj, res_endereco, res_senha)
	values(null, '$nomer','$telefoner','$cnpj','$enderecor','$senhar')");

	header ("Location: ../html/cadastro1sem.html")
?>
