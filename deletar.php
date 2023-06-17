<?php
include("conexao.php");
$idb = $_GET["idb"];
$arquivo = $_GET["img_name_random"];
$diretorio = "arquivos/";

unlink($diretorio . $arquivo);
mysqli_query($conexao, "DELETE FROM img WHERE img_codigo = '$idb' ");
header("location:arquivo.php");
?>