<!DOCTYPE html> <!-- Define o tipo do documento como HTML5 -->
<html lang="pt-BR"> <!-- Define o idioma da página como português do Brasil -->
<head>
    <meta charset="UTF-8"> <!-- Define a codificação de caracteres como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Garante que o layout se adapte a diferentes dispositivos -->
    <title>Listar</title> <!-- Define o título da aba do navegador -->
    <link rel="stylesheet" href="../css/style.css"> <!-- Vincula o arquivo de estilo CSS externo -->
</head>
    <div class="table"> <!-- Cria uma div com a classe 'table' para aplicar estilo à tabela -->
        <table> <!-- Início da tabela -->
            <tr><td colspan="6"><h2>Listar Usuário</h2></td></tr> <!-- Linha de título da tabela -->
            <tr>
                <!-- Cabeçalhos da tabela -->
                <th>Código do usuario</th>
                <th>Login</th>
                <th>Senha</th>
                <th>Tipo</th>
                <th>Excluir</th>
                <th>Editar</th>
            </tr>
    </div> <!-- Fecha a div que envolve a tabela (posição fora de ordem, pois deveria estar após a tabela) -->

<?php
// Inclui o arquivo de conexão com o banco de dados
include('../bd/conexao.php');

// Define a consulta SQL para buscar todos os usuários da tabela
$sql = "Select * from usuario";

// Executa a consulta e armazena o resultado
$res = mysqli_query($id, $sql);

// Percorre cada linha retornada pela consulta
while($linha=mysqli_fetch_array($res)){ ?>
        <tr> <!-- Início da linha de dados -->
            <!-- Cada célula recebe um valor da tabela 'usuario' -->
            <td> <?php echo$linha['id_usuario']; ?> </td> <!-- Exibe o ID do usuário -->
            <td> <?php echo$linha['login_']; ?> </td> <!-- Exibe o login do usuário -->
            <td> <?php echo$linha['senha']; ?> </td> <!-- Exibe a senha do usuário -->
            <td> <?php echo$linha['tipo']; ?> </td> <!-- Exibe o tipo do usuário -->
            <td>
                <!-- Link para deletar o usuário com ícone de lixeira -->
                <a href="deletar.php?id_usuario=<?php echo$linha['id_usuario']; ?> ">
                    <img src="../image/del.png" alt="Delete">
                </a>
            </td>
            <td>
                <!-- Link para editar o usuário com ícone de edição -->
                <a href="editar_usuario.php?id_usuario=<?php echo$linha['id_usuario']; ?>">
                    <img src="../image/edit.png" alt="Editar">
                </a>
            </td>
<?php } ?> <!-- Fim do laço while -->

        </tr> <!-- Fechamento da última linha da tabela -->
    <tr>
        <!-- Linha contendo botão para voltar para a página inicial -->
        <td colspan ="6">
            <button id='voltar'>
                <a href="../home/home.html">Voltar</a>
            </button>
        </td>
    </tr>
    </table> <!-- Fecha a tabela -->
    
</body>
</html>
