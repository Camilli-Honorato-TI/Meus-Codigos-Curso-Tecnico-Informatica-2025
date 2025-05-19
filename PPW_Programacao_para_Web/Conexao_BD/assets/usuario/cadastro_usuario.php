<!DOCTYPE html> <!-- Define o tipo do documento como HTML5 -->
<html lang="pt-BR"> <!-- Define o idioma da página como português do Brasil -->
<head>
    <meta charset="UTF-8"> <!-- Define a codificação de caracteres como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Garante que a visualização seja adequada em dispositivos móveis -->
    <title>Cadastro</title> <!-- Define o título da aba do navegador -->
    <link rel="stylesheet" href="../css/style.css"> <!-- Importa o arquivo CSS externo para estilização -->
</head>
<body>
<div class="cadastro"> <!-- Cria uma div com a classe 'cadastro' -->

    <?php
        // Inclui o arquivo de conexão com o banco de dados localizado na pasta 'bd'
        include('../bd/conexao.php');

        // Recebe os dados enviados via formulário (método POST)
        $login = $_POST['login']; // Recebe o valor do campo 'login'
        $senha = $_POST['senha']; // Recebe o valor do campo 'senha'
        $tipo = $_POST['tipo'];   // Recebe o valor do campo 'tipo'

        // Monta o comando SQL para inserir os dados na tabela 'usuario'
        $sql = "insert into usuario(login_, senha, tipo)
        values('".$login."',       
                '".$senha."',     
                '".$tipo."')"; 

        // Executa a consulta SQL na conexão definida em $id
        $ret = mysqli_query($id, $sql);

        // Verifica se a inserção foi bem-sucedida
        if($ret){
            // Exibe mensagem de sucesso
            echo"<h4>Usuário cadastrado com sucesso</h4>";
        }
        else{
            // Exibe mensagem de erro caso a inserção falhe
            echo"<h4>Erro ao cadastrar o usuario</h4>";
        }
    ?>

    <!-- Botão que leva de volta para a página 'home.html' -->
    <button id='voltar'><a href="../home/home.html">Voltar</a></button>
</div>
</body>
</html>
