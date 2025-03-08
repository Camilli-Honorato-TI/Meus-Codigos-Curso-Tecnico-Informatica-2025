<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="fundo">
    <?php
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        if($email == "admin" && $senha == "1234"){
            echo "Login feito com sucesso!";
        }else{
            echo "Usuário ou senha inválidos!";
        }
    ?>
    </div>
</body>
</html>