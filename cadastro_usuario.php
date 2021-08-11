<?php
if(IsSet($_POST['cadastrar'])){
    include"conexao.php";
    $name=$_POST['name'];
    $lastname=$_POST['lastname'];
    $sex=$_POST['sex'];
    $phone=$_POST['phone'];
    $cep=$_POST['cep'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="INSERT INTO cadastro VALUES ('0','$name','$lastname','$sex','$phone','$cep','$email','$password')";
    $resultado=mysqli_query($conexao,$sql);
if($resultado){
	echo"<script>alert('Cadastro realizado com êxito!'); window.location.href='relatorio.php'</script>";
}else{
	echo"<script>alert('Problemas ao cadastrar usuário!'); window.location.href='relatorio.php'</script>";
}
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Style.css">
    <title>M+M Cadastros</title>
</head>
<header></header>
<body>
        <main>
            <div class="card text-dark">
                <div class="card-header">
                    <h1 align="center" class="card-title">M+M Arquitetura e Design</h1>
                </div><br>
                <div class="card-body"></div>
            </div><br><br>

            <form method="post">
                <fieldset class="group">
                <h2 align="center" class="cadastro">Cadastro</h2>
                <p align="center" class="info">Preencha com as informações solicitadas para concluir o cadastro</p><br>
                    <div class="name-cadastro">
                        <label for="name"><strong>Nome</strong></label>
                        <input type="text" name="name" id="name" required>
                    </div>

                    <!-- classe genero-cadastro -->
                    <div class="genero-cadastro">
                        <label for="sex"><strong>Gênero</strong></label>
                        <select name="sex" id="sex" required>
                            <option selected disabled value="">Selecione...</option>
                            <option name="masculino" id="masculino">Masculino</option>
                            <option name="feminino" id="feminino">Feminino</option>
                            <option name="indefinido" id="indefinido">Prefiro não dizer</option>
                        </select>
                    </div>

                    <!-- phone-cadastro -->
                    <div class="phone-cadastro">
                        <label><strong>Telefone</strong></label>
                        <input type="text" class="form-control" id="phone" name="phone" required placeholder="xx xxxx-xxxx" maxlength="13" pattern="(\[0-9]{2}\)\s([9]{1})?([0-9]{4})-([0-9]{4})" />
                    </div>

                    <!-- cep-cadastro -->
                    <div class="cep-cadastro">
                        <label><strong>CEP</strong></label>
                        <input type="text" name="cep" id="cep" maxlength="9" required>
                    </div>

                    <!-- email-cadastro -->
                    <div class="email-cadastro">
                        <label><strong>E-mail</strong></label>
                        <input type="email" name="email" id="email" required>
                    </div>

                    <!-- senha-cadastro -->
                    <div class="senha-cadastro">
                        <label><strong>Senha</strong></label>
                        <input type="password" name="password" id="password" required>
                    </div>

                    <!-- check -->
                    <div class="check">
                        <label>Eu concordo:</label>
                        <input type="checkbox" name="check" id="checkbox" value="Concordo" required>            
                    </div>
                    <button class="btn" type="submit" name="cadastrar">Cadastrar</button>
                </fieldset><br>
            </form>
        </main>
                       
    
</body>

<script type="text/javascript"></script>
</html>
