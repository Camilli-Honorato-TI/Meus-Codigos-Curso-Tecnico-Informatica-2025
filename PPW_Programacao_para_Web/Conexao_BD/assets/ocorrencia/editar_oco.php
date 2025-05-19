<?php
include('../bd/conexao.php'); // Inclui o arquivo de conexão com o banco de dados
$id_ocorrencia= $_GET['id_ocorrencia']; // Obtém o ID da ocorrência via parâmetro GET da URL

// Prepara a consulta SQL para buscar os dados da ocorrência pelo ID
$sql = "SELECT * FROM ocorrencias WHERE id_ocorrencia = '$id_ocorrencia'";
$res = mysqli_query($id, $sql); // Executa a consulta SQL no banco de dados

// Loop para percorrer os resultados da consulta (normalmente será apenas 1)
while($linha=mysqli_fetch_array($res)){?>
<!DOCTYPE html> <!-- Declaração do tipo do documento como HTML5 -->
<html lang="pt-BR"> <!-- Define o idioma da página como português do Brasil -->
<head>
    <meta charset="UTF-8"> <!-- Define a codificação de caracteres para UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Ajuste para responsividade em dispositivos móveis -->
    <title>Conexão BD</title> <!-- Título que aparece na aba do navegador -->
    <link rel="stylesheet" href="../css/style.css"> <!-- Inclusão do arquivo CSS para estilos -->
</head>
<body>
    <div class="container"> <!-- Container principal que envolve o conteúdo -->
    <div class="form">  <!-- Container específico para o formulário -->
        <form action="form_editar_oco.php" method="post"> <!-- Formulário que envia dados via POST para form_editar_oco.php -->
            <div class="title">
                <h3>Atulizar os dados</h3> <!-- Título do formulário -->
            </div>

            <!-- Campo oculto para enviar o ID da ocorrência ao submeter o formulário -->
            <div class="input-box">          
                <input type="hidden" name="id_ocorrencia" value="<?php echo$linha['id_ocorrencia']; ?>">
            </div>

            <!-- Campo para edição do campo 'ocorrencia' -->
            <div class="input-box">            
                <label for="nome">Ocorrência:</label>
                <!-- Campo de texto preenchido com o valor atual da senha da ocorrencia -->
                <input type="text" name="ocorrencia" value="<?php echo$linha['ocorrencia']; ?> ">
            </div>

            <!-- Campo para edição do campo 'descricao' -->
            <div class="input-box">
                <label for="email">Descrição:</label>  <!-- Rótulo para o campo de login -->
                <!-- Campo de texto preenchido com o valor atual da senha da ocorrencia -->
                <input type="text" name="descricao" value="<?php echo$linha['descricao']; ?> ">
            </div>

            <!-- Campo para edição do campo 'punicao' -->
            <div class="input-box">        
                <label for="cpf">Punição:</label>
                <!-- Campo de texto preenchido com o valor atual da senha da ocorrencia -->
                <input type="text" name="punicao" value="<?php echo$linha['punicao']; ?>" >
            </div>

            <!-- Campo para edição do campo 'tipo_punicao' -->
            <div class="input-box">
                <label for="data_nasc">Tipo Punição:</label>
                <!-- Campo de texto preenchido com o valor atual da senha da ocorrencia -->
                <input type="text" name="tipo_punicao" value="<?php echo$linha['tipo_punicao']; ?> ">
            </div>

            <!-- Campo para edição do campo 'legislacao' -->
            <div class="input-box">
                <label for="tel">Legislação:</label>
                <!-- Campo de texto preenchido com o valor atual da senha da ocorrencia -->
                <input type="text" name="legislacao" value="<?php echo$linha['legislacao']; ?> ">
            </div>

            <!-- Campo para edição do campo 'tipo_legislacao' -->
            <div class="input-box">
                <label for="endereco">Tipo Legislação:</label>
                <!-- Campo de texto preenchido com o valor atual da senha da ocorrencia -->
                <input type="text" name="tipo_legis" value="<?php echo$linha['tipo_legislacao']; ?> ">
            </div>

            <!-- Campo para edição do campo 'data_criacao' -->
            <div class="input-box">
                <label for="comp">Data criação:</label>
                <!-- Campo de texto preenchido com o valor atual da senha da ocorrencia -->
                <input type="date" name="data" value="<?php echo$linha['data_criacao']; ?>">
            </div>

            <!-- Campo para edição do campo 'status_' -->
            <div class="input-box">
                <label for="comp">Status:</label>
                <!-- Campo de texto preenchido com o valor atual da senha da ocorrencia -->
                <input type="text" name="status" value="<?php echo$linha['status_']; ?>" ?>
            </div>

        <?php } ?> <!-- Fecha o laço while -->
        <!-- Botão para enviar o formulário -->
        <input type="submit" value="Enviar" id="btn">
        </form>
    </div> 
</body>
</html>
