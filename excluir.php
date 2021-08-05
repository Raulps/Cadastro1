<?php
//if(IsSet($_POST['id'])){
include"conexao.php";
$id=$_GET['id'];
$sql="SELECT * FROM cadastro WHERE id='$id'";
$resultado=mysqli_query($conexao,$sql);
$res=mysqli_fetch_row($resultado);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Ecluir dados</title>
</head>
<body>
<h2>Excluindo dados</h2>

<?php
echo"<form method='post'>
ID: <input type='text' name='id' value='$res[0]' readonly><br><br>
Nome: <input type='text' name='name' value='$res[1]' readonly><br><br>
Sobrenome: <input type='text' name='lastname' value='$res[2]' readonly><br><br>
Gênero: <input type='text' name='sex' value='$res[3]' readonly><br><br>
Telefone: <input type='text' name='phone' value='$res[4]' readonly><br><br>
CEP: <input type='text' name='cep' value='$res[5]' readonly><br><br>
E-mail: <input type='text' name='email' value='$res[6]' readonly><br><br><br><br>
<input type='submit' value='Excluir dados' name='enviar'>
</form></body></html>";
?>

<?php
if(IsSet($_POST['enviar'])){
	include"conexao.php";
$id=$_GET['id'];
$sql="DELETE FROM cadastro WHERE id='$id'";
$resultado=mysqli_query($conexao,$sql);
if($resultado){
	echo"<script>alert('Dados excluídos com êxito!'); window.location.href='relatorio.php'</script>";
}else{
	echo"<script>alert('Problemas ao excluir dados!'); window.location.href='relatorio.php'</script>";
}
}
?>
