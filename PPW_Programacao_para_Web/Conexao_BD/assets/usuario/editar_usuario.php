<?php
include('../bd/conexao.php'); // Inclui o arquivo de conexão com o banco de dados
$id_usuario = $_GET['id_usuario']; // Obtém o ID do usuário a ser editado através da URL (via método GET)

// Cria uma consulta SQL para selecionar todos os dados do usuário com o ID fornecido
$sql = "SELECT * FROM usuario WHERE id_usuario = '$id_usuario'";
$res = mysqli_query($id, $sql);  // Executa a consulta no banco de dados

// Itera sobre os resultados retornados da consulta
while($linha=mysqli_fetch_array($res)){ ?>
<!DOCTYPE html> <!-- Define o tipo do documento como HTML5 -->
<html lang="pt-BR"> <!-- Define o idioma da página como português do Brasil -->
<head>
    <meta charset="UTF-8"> <!-- Define a codificação de caracteres como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Garante responsividade em dispositivos móveis -->
    <title>Conexão BD</title> <!-- Define o título da aba do navegador -->
    <link rel="stylesheet" href="../css/style.css"> <!-- Linka o arquivo de estilos CSS externo -->
</head>
<body>
    <div class="container"> <!-- Div principal que envolve o formulário -->
    <div class="form"> <!-- Div para agrupar os elementos do formulário -->
        <form action="form_editar_usuario.php" method="post"> <!-- Início do formulário que envia os dados para 'form_editar_usuario.php' via POST -->
            <div class="title">
                <h3>Atualizar os dados</h3> <!-- Título do formulário -->
            </div>

            <!-- Id usuario -->
            <div class="input-box">            
                <!-- Campo oculto que armazena o ID do usuário para ser enviado no POST -->
                <input type="hidden" name="id_usuario" value="<?php echo$linha['id_usuario']; ?>">
            </div>

            <!-- Recebe Nome do usuario -->
            <div class="input-box">            
                <label for="login">Login:</label> <!-- Rótulo para o campo de login -->
                <!-- Campo de texto preenchido com o valor atual do login do usuário -->
                <input type="text" name="login" value="<?php echo$linha['login_']; ?> ">
            </div>

            <!--Senha do usuario-->
            <div class="input-box">
                <label for="senha">Senha:</label> <!-- Rótulo para o campo de senha -->
                <!-- Campo de texto preenchido com o valor atual da senha do usuário -->
                <input type="text" name="senha" value="<?php echo$linha['senha']; ?> ">
            </div> 
            
            <div class="form-container">
                <!-- Recebe o tipo do usuario -->
                <div class="gender-group">
                    <h2 for="sexo">Tipo:</h2> <!-- Rótulo -->

                    <div class="gender-input">
                        <!-- Opção de tipo 'Funcionario' -->
                        <label for="Funcionario">Funcionario</label>
                        <input type="radio" id="funcionario" name="tipo" value="F" required>
                        
                        <!-- Opção de tipo 'Cliente' -->
                        <label for="Cliente">Cliente</label>
                        <input type="radio" id="cliente" name="tipo" value="C">

                        <!-- Opção de tipo 'Administrador' -->
                        <label for="Administrador">Administrador</label>
                        <input type="radio" id="adm" name="tipo" value="A">
                    </div>
                </div>
            <?php } ?> <!-- Fecha o laço while -->

        <!-- Botão para envio do formulário -->
        <input type="submit" value="Enviar" id="btn">
        </form>
    </div>
</body>
</html>
