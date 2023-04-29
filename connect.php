<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de cadastro</title>
</head>
<body>
<?php 
    $servidor="localhost:3307";
    $usuario="root";
    $senha="";
    $dbname="cadastro";

    $conexao = new mysqli($servidor, $usuario, $senha, $dbname);

    if($conexao->connect_errno)
    {
        echo "ERRO2";
    }
    else
    {
        echo "Conexão efetuada com sucesso";
    }
?>
</body>
</html>