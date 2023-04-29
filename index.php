<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style3.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro </title>
</head>

<body>
    
    <div class="pai">
        <div class="lgn">
             <h1> LOGIN</h1>
        </div>
    <div class="form">
        <form action="cads.php" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome">

            <label for="sobrenome">Sobrenome</label>
            <input type="text" name="sobrenome">

            <label for="email">Email</label>
            <input type="email" name="email">

            <label for="password">Senha</label>
            <input type="password"name="senha">

            <h1>Marque seu sexo</h1>

            <div class="radios">
               

            <label for="masc">Masculino</label>
            <input type="checkbox" name="masc">

            <label for="femi">Feminino</label>
            <input type="checkbox" name="femi">
            </div>
            <button>CADASTRAR</button>
        </form>
    </div>
    </div>
</body>

</html>