
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
$query = mysqli_query($sql, "select * from restaurante");
?>

<h3>Listagem de restaurantes</<h3>
<table border = "1">
<tr>
<td align = "center">Código</td>
<td align = "center">Nome</td>
<td align = "center">Telefone</td>
<td align = "center">Cnpj</td>
<td align = "center">Endereço</td>
<td align = "center" colspan = "2">Ação</td>
</tr>
<?php

while($row = mysqli_fetch_array($query)){
	$codigor = $row['res_cod'];
	$nomer = $row['res_nome'];
	$telefoner = $row['res_telefone'];
	$cnpj = $row['res_cnpj'];
	$enderecor = $row['res_endereco'];
	echo"
	<tr>
	<td>$codigor</td>
	<td>$nomer</td>
	<td>$telefoner</td>
	<td>$cnpj</td>
	<td>$enderecor</td>
	<td>[Editar]</td>
	<td><a href=\"resexcluir.php?res_cod=$codigor\">[Excluir]</td>
	</td>";
}

?>
</table>
</body>
</html>