<?php

include "conexao.php";

$id = $_GET["usu_cod"];

mysqli_query($sql,"delete from usuario where usu_cod = $id");

header("Location: usulistar.php")

?>