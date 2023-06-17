<?php
include("conexao.php");

$diretorio = "arquivos";
$arquivos = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : FALSE;

for ($k = 0; $k < count($arquivos['name']); $k++) {
	$varImgName = $arquivos['name'][$k];
	$temp = $arquivos['tmp_name'][$k];
	$tipo = $arquivos['type'][$k];
    $erro = $arquivos['error'][$k];
	$extension = pathinfo($varImgName, PATHINFO_EXTENSION);

	if ($extension == 'png'){
		$varImgNameRandom = md5(uniqid()) . "." . $extension;
		$destino = $diretorio . "/" . $varImgNameRandom;

		if (move_uploaded_file($temp, $destino)) {
			mysqli_query($conexao, "INSERT INTO img (img_name, img_name_random) VALUES ('$varImgName', '$varImgNameRandom')");
		}else {
			die("<script> alert('Não foi.');</script>");
		}
	} else {
		die("<script> alert('Arquivo não é compatível com o tipo PNG.'); window.location='inicio.php'; </script>");
	}
}
die("<script> alert('Foi!'); window.location='inicio.php'; </script>");
?>