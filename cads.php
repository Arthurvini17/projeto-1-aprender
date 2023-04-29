<?php 
include("connect.php");


    $nome=$_POST['nome'];
    $sobrenome=$_POST['sobrenome'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];

    $sql="INSERT INTO cadastro(nome, sobrenome, email, senha) VALUES ('$nome', '$sobrenome', '$email', '$senha')";
   

    if(mysqli_query($conexao, $sql)){
        echo "usuario cadastrado com sucesso";
    }

    else 
    {
        echo "ERRO2" . mysqli_connect_error();
    }
    $sql ="SELECT * FROM cadastro ORDER BY nome DESC";
    
    $result = $conexao->query($sql);

    print_r($result);

    mysqli_close($conexao);
    

?>