<!DOCTYPE html> <!-- Define o tipo do documento como HTML5 -->
<html lang="pt-BR"> <!-- Define o idioma da página como português do Brasil -->
<head>
    <meta charset="UTF-8"> <!-- Define a codificação de caracteres como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Configura a visualização para dispositivos móveis -->
    <title>Deletar</title> <!-- Define o título da aba do navegador -->
    <link rel="stylesheet" href="../css/style.css"> <!-- Vincula o arquivo CSS externo para estilização -->
</head>
<body>
    <div class="cadastro"> <!-- Cria uma div com a classe 'cadastro' -->

        <?php
            // Inclui o arquivo responsável por fazer a conexão com o banco de dados
            include('../bd/conexao.php');

            // Recupera o valor do parâmetro 'id_usuario' passado via URL (método GET)
            $id_usuario = $_GET['id_usuario'];

            // Monta a instrução SQL para deletar o usuário com o ID informado
            $sql = "Delete from usuario where id_usuario =".$id_usuario;

            // Executa a instrução SQL na base de dados
            $res = mysqli_query($id, $sql);

            // Verifica se a exclusão foi realizada com sucesso
            if($res){
                echo"<h4>Deletado com sucesso</h4>"; // Mensagem de sucesso
            }else{
                echo"<h4>Erro ao Deletar</h4>"; // Mensagem de erro
            }
        ?>
        
        <!-- Botão que redireciona para a página 'listar.html' -->
        <button id='voltar'><a href="listar.php">Voltar</a></button>
    </div>
</body>
</html>
