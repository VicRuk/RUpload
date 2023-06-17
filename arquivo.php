<?php
include("conexao.php");
$pasta = "arquivos/";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RUpload</title>
</head>

<table border='1'>
	<tr>
		<td>Nome do Arquivo</td>
		<td>Excluir</td>
	</tr>

	<?php
	$query = mysqli_query($conexao, "SELECT * FROM img");
	while($exibe = mysqli_fetch_array($query)){
	?>

	<tr>
		<td><a href="<?php echo "$pasta$exibe[2]"?>"><?php echo $exibe[2]?></a><br></td>
		<td><b><a href="deletar.php?idb=<?php echo $exibe[0]?>&amp;img_name_random=<?php echo $exibe[2]?>">Excluir</a></b></td>			
	</tr>
	<?php } ?>
</table>