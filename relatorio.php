<?php
include"conexao.php";
$sql="SELECT * FROM cadastro";
$resultado=mysqli_query($conexao,$sql);
$achou=mysqli_num_rows($resultado);

echo"<meta charset='utf-8'><table width='60%' border='1' bordercolor='gray'>
<link rel='stylesheet' type='text/css' href='stylerelatorio.css'>
<tr><td colspan='9' align='center'><h2>Relatório</h2></td></tr>
<tr><td>ID</td><td>Nome</td><td>Sobrenome</td><td>Gênero</td><td>Telefone</td><td>CEP</td><td>E-mail</td><td colspan='2'>Ação</td>";

for($i=1;$i<=$achou;$i++){
	$res=mysqli_fetch_row($resultado);

$id=$res[0];
echo"<tr><td>$res[0]</td>
<td>$res[1]</td>
<td>$res[2]</td>
<td>$res[3]</td>
<td>$res[4]</td>
<td>$res[5]</td>
<td>$res[6]</td>
<td><a class='editar' href='editar2.php?id=$id'>Editar</td><td><a class='excluir' href='excluir.php?id=$id'>Excluir</td></tr>";
}
echo"</table>"
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>M+M Relatório</title>
    </head>
    <body>
        
    </body>
</html>
