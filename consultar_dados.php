<?php
if(IsSet($_POST['enviar'])){
	include"conexao.php";
	$name=$_POST['name'];
    $lastname=$_POST['lastname'];
    $sex=$_POST['sex'];
    $phone=$_POST['phone'];
    $cep=$_POST['cep'];
    $email=$_POST['email'];
    $sql="SELECT * FROM cadastro WHERE name='$name' OR lastname='$lastname' OR sex='$sex' OR phone='$phone' OR cep='$cep' OR email='$email' ";
    $resultado=mysqli_query($conexao,$sql);
    $res=mysqli_fetch_row($resultado);
    echo"Nome: $res[1]<br>";
    echo"Sobrenome: $res[2]<br>";
    echo"Genero: $res[3]<br>";
    echo"Telefone: $res[4]<br>";
    echo"CEP: $res[5]<br>";
    echo"E-mail: $res[6]<br>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Consulta de cadastro</title></head>
<body>
	<br><h2 align="center">Insira seus dados para realizar a consulta</h2><br>
<form method="post">
       <fieldset class="group">
            <div class="camp">
                <label for="name"><strong>Nome</strong></label>
                <input type="text" name="name" id="name">
            </div>

            <div class="camp">
                <label for="lastname"><strong>Sobrenome</strong></label>
                <input type="text" name="lastname" id="lastname">
            </div>

            <div class="camp">
                <label for="sex"><strong>Genero</strong></label>
                <select name="sex" id="sex">
                    <option selected disabled value="">Selecione...</option>
                    <option name="masculino" id="masculino">Masculino</option>
                    <option name="feminino" id="feminino">Feminino</option>
                    <option name="indefinido" id="indefinido">Prefiro não dizer</option>
                </select>
            </div>
        </fieldset><br>

        <fieldset class="group">
            <div class="camp">
                <label><strong>Telefone</strong></label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="(xx) xxxx-xxxx" maxlength="14" pattern="(([0-9]{2}\))\s([9]{1})?([0-9]{4})-([0-9]{4})" />
            </div>

            <div class="camp">
                <label><strong>CEP</strong></label>
                <input type="text" name="cep" id="cep" maxlength="9">
            </div>
        </fieldset><br>

        <div class="camp">
            <label><strong>E-mail</strong></label>
            <input type="email" name="email" id="email">
        </div>

        <div class="camp">
            <label><strong>Senha</strong></label>
            <input type="password" name="password" id="password">
        </div>

        <div id="check">
            <label>Selecione para concordar com os termos</label>
            <input type="checkbox" name="check" id="check" value="Concordo">            
        </div>

        <button class="btn" type="submit" name="enviar">Consultar</button>           
       
    </form>



</body>
</html>