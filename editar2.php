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
<title>Editar dados</title>
</head>
<body>
<h2>Editando dados</h2>

<?php
echo"<form method='post'>
ID: <input type='text' name='id' value='$res[0]' readonly><br><br>
Nome: <input type='text' name='name' value='$res[1]' readonly><br><br>
Sobrenome: <input type='text' name='lastname' value='$res[2]' readonly><br><br>
Gênero: <input type='text' name='sex' value='$res[3]' readonly><br><br>
Telefone: <input type='text' name='phone' value='$res[4]'><br><br>
CEP: <input type='text' name='cep' value='$res[5]'><br><br>
E-mail: <input type='text' name='email' value='$res[6]'><br><br><br><br>
<input type='submit' value='Editar dados' name='enviar'>
</form></body></html>";
?>

<?php
if(IsSet($_POST['enviar'])){
	include"conexao.php";
	$id=$_POST['id'];
	$name=$_POST['name'];
    $lastname=$_POST['lastname'];
    $sex=$_POST['sex'];
    $phone=$_POST['phone'];
    $cep=$_POST['cep'];
    $email=$_POST['email'];
$sql="UPDATE cadastro set phone='$phone',cep='$cep',email='$email' WHERE id='$id'";
$resultado=mysqli_query($conexao,$sql);
if($resultado){
	echo"<script>alert('Dados alterados com êxito!'); window.location.href='relatorio.php'</script>";
}else{
	echo"<script>alert('Problemas ao alterar dados!'); window.location.href='relatorio.php'</script>";
}
}
?>