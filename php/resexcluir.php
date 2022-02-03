<?php

include "conexao.php";

$id = $_GET["res_cod"];

mysqli_query($sql,"delete from restaurante where res_cod = $id");

header("Location: reslistar.php")

?>