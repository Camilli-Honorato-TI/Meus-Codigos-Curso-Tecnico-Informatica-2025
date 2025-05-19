<!DOCTYPE html> <!-- Define o tipo de documento como HTML5 -->
<html lang="pt-BR"> <!-- Define o idioma da página como português do Brasil -->
<head>
    <meta charset="UTF-8"> <!-- Define a codificação de caracteres como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Garante que a visualização se ajuste a diferentes dispositivos -->
    <title>Atualização</title> <!-- Define o título da aba do navegador -->
    <link rel="stylesheet" href="../css/style.css"> <!-- Vincula um arquivo de estilo externo localizado na pasta css -->
</head>
<body>
    <div class="cadastro"> <!-- Div principal com a classe 'cadastro' para estilização -->

        <?php
        // Inclui o arquivo responsável pela conexão com o banco de dados
        include('../bd/conexao.php');

        // Recupera os dados enviados via método POST pelo formulário
        $id_usuario   = $_POST['id_usuario']; // ID do usuário a ser atualizado
        $login = $_POST['login'];             // Novo valor para o campo login
        $senha = $_POST['senha'];             // Novo valor para o campo senha
        $tipo = $_POST['tipo'];               // Novo valor para o campo tipo

        // Monta a instrução SQL para atualizar os dados do usuário na tabela
        $sql = "UPDATE usuario SET 
                    login_  = '$login',
                    senha = '$senha',     
                    tipo = '$tipo'      
                    WHERE id_usuario = $id_usuario"; // Onde o id_usuario for igual ao recebido

        // Executa a consulta SQL na base de dados
        $ret = mysqli_query($id, $sql);

        // Verifica se a atualização foi realizada com sucesso
        if ($ret) {
            echo "<h4>Usuario atualizado com sucesso</h4>"; // Mensagem de sucesso
        } else {
            echo "<h4>Erro ao atualizar: </h4>"; // Mensagem de erro
        }
        ?>

        <!-- Botão que redireciona para a página de listagem dos usuários -->
        <button id='voltar'><a href="listar.php">Voltar</a></button>   
    </div>
</body>
</html>
