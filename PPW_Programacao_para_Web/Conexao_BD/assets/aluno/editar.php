<?php
include('../bd/conexao.php'); // Inclui o arquivo de conexão com o banco de dados

$id_aluno = $_GET['id_aluno']; // Obtém o ID do aluno a ser editado via método GET na URL

// Consulta SQL para buscar todos os dados do aluno com o ID fornecido
$sql = "SELECT * FROM alunos WHERE id_aluno = '$id_aluno'";

$res = mysqli_query($id, $sql); // Executa a consulta no banco de dados

// Percorre o resultado da consulta, normalmente só terá um registro
while ($linha = mysqli_fetch_array($res)) { ?>
<!DOCTYPE html> <!-- Define o tipo do documento como HTML5 -->
<html lang="pt-BR"> <!-- Define o idioma da página como português do Brasil -->
<head>
    <meta charset="UTF-8"> <!-- Define a codificação de caracteres como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Ajusta a visualização para dispositivos móveis -->
    <title>Editar</title> <!-- Define o título da aba do navegador -->
    <link rel="stylesheet" href="../css/style.css"> <!-- Vincula o arquivo CSS externo -->
</head>
<body>
    <div class="container"> <!-- Container principal -->
        <div class="form"> <!-- Container para o formulário -->
            <form action="form_editar.php" method="post"> <!-- Formulário que envia os dados via POST para 'form_editar.php' -->
                <div class="title">
                    <h3>Atualizar os dados</h3> <!-- Título do formulário -->
                </div>

                <!-- Campo oculto que armazena o ID do aluno para envio via POST -->
                <input type="hidden" name="id_aluno" value="<?php echo $linha['id_aluno']; ?>">

                <!-- Campo para editar o nome do aluno -->
                <div class="input-box">
                    <label for="nome">Nome aluno:</label>
                    <input type="text" name="nome" value="<?php echo $linha['nome']; ?>">
                </div>

                <!-- Campo para editar o CPF do aluno -->
                <div class="input-box">
                    <label for="cpf">CPF aluno:</label>
                    <input type="text" name="cpf" value="<?php echo $linha['cpf']; ?>">
                </div>

                <!-- Campo para editar a data de nascimento do aluno -->
                <div class="input-box">
                    <label for="data_nasc">Data Nascimento do aluno:</label>
                    <input type="date" name="data_nasc" value="<?php echo $linha['data_nasc']; ?>">
                </div>

                <!-- Campo para editar o email do aluno -->
                <div class="input-box">
                    <label for="email">Email do aluno:</label>
                    <input type="email" name="email" value="<?php echo $linha['email']; ?>">
                </div>

                <!-- Campo para editar o telefone do aluno -->
                <div class="input-box">
                    <label for="tel">Telefone do aluno:</label>
                    <input type="text" name="tel" value="<?php echo $linha['telefone']; ?>">
                </div>

                <!-- Campo para editar o endereço do aluno -->
                <div class="input-box">
                    <label for="endereco">Endereço do aluno:</label>
                    <input type="text" name="endereco" value="<?php echo $linha['endereco']; ?>">
                </div>

                <!-- Campo para editar o complemento do endereço do aluno -->
                <div class="input-box">
                    <label for="complemento">Complemento endereço aluno:</label>
                    <input type="text" name="complemento" value="<?php echo $linha['complemento']; ?>">
                </div>

                <div class="form-container"> <!-- Container para grupos de inputs -->

                    <!-- Grupo para selecionar o sexo do aluno -->
                    <div class="gender-group">
                        <h2 for="sexo">Sexo do aluno:</h2>
                        <div class="gender-input">
                            <label for="feminino">Feminino</label>
                            <!-- Marca o radio que corresponde ao sexo atual do aluno -->
                            <input type="radio" id="feminino" name="genero" value="F" <?php if($linha['sexo'] == 'F') echo 'checked'; ?> required>

                            <label for="masculino">Masculino</label>
                            <input type="radio" id="masculino" name="genero" value="M" <?php if($linha['sexo'] == 'M') echo 'checked'; ?>>
                        </div>
                    </div>

                    <!-- Grupo para selecionar se o aluno é PCD -->
                    <div class="gender-group">
                        <h2 for="pcd">PCD aluno:</h2>
                        <div class="gender-input">
                            <label for="sim">Sim</label>
                            <input type="radio" id="sim" name="pcd" value="S" <?php if($linha['pcd'] == 'S') echo 'checked'; ?> required>

                            <label for="nao">Não</label>
                            <input type="radio" id="nao" name="pcd" value="N" <?php if($linha['pcd'] == 'N') echo 'checked'; ?>>
                        </div>
                    </div>
                </div>

                <!-- Botão para enviar o formulário -->
                <input type="submit" value="Enviar" id="btn">
            </form>
        </div> <!-- Fecha a div 'form' -->
    </div> <!-- Fecha a div 'container' -->
</body>
</html>
<?php } // Fecha o while ?>
