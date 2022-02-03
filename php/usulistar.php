
<!doctype html>
<html lang = "pt-br">
<head>
<meta charset = "utf-8" />
<title>Delivery</title>

<link rel= "stylesheet" href= "css/estilo.css" type = "text/css">
</head>
<body background = "../img/foodb.png">


<?php
	include "conexao.php";
	$query = mysqli_query($sql,"select * from usuario");
?>

<h3>Listagem de usuários</<h3>
<table border = "1">
<tr>
<td align = "center">Código</td>
<td align = "center">Nome</td>
<td align = "center">Email</td>
<td align = "center">Cpf</td>
<td align = "center" colspan = "2">Ação</td>

</tr>

<?php
while($row = mysqli_fetch_array($query)){
$codigo = $row['usu_cod'];
$nome = $row['usu_nome'];
$email = $row['usu_email'];
$cpf = $row['usu_cpf'];

echo"
<tr>
<td>$codigo</td>
<td>$nome</td>
<td>$email</td>
<td>$cpf</td>
<td>[Editar]</td>
<td><a href=\"usuexcluir.php?usu_cod=$codigo\">[Excluir]</td>
</td>";
}

?>
</table>
</body>
</html>