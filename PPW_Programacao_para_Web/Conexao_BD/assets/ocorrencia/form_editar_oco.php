<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"> <!-- Define a codificação de caracteres como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Ajusta a visualização para dispositivos móveis -->
    <title>Atualização</title> <!-- Título da aba do navegador -->
    <link rel="stylesheet" href="../css/style.css"> <!-- Vincula o arquivo CSS externo -->
</head>
<body>
    <div class="cadastro"> <!-- Container principal para estilização -->
        <?php
        include('../bd/conexao.php'); // Inclui o arquivo de conexão com o banco de dados

        // Recupera os dados enviados pelo formulário via método POST
        $id_ocorrencia   = $_POST['id_ocorrencia']; // ID da ocorrência a ser atualizada
        $ocorrencia      = $_POST['ocorrencia'];    // Novo valor para campo ocorrência
        $descricao       = $_POST['descricao'];     // Novo valor para descrição
        $punicao         = $_POST['punicao'];       // Novo valor para punição
        $tipo_punicao    = $_POST['tipo_punicao'];  // Novo valor para tipo de punição
        $legislacao      = $_POST['legislacao'];    // Novo valor para legislação
        $tipo_legis      = $_POST['tipo_legis'];    // Novo valor para tipo de legislação
        $data            = $_POST['data'];          // Nova data de criação
        $status          = $_POST['status'];        // Novo status da ocorrência

        // Monta a instrução SQL para atualizar a ocorrência no banco de dados
        $sql = "UPDATE ocorrencias SET 
                    ocorrencia = '$ocorrencia',
                    descricao = '$descricao',
                    punicao = '$punicao',
                    legislacao = '$legislacao',
                    tipo_legislacao = '$tipo_legis',
                    tipo_punicao = '$tipo_punicao',
                    data_criacao = '$data',
                    status_ = '$status' 
                WHERE id_ocorrencia = $id_ocorrencia";

        // Executa a query no banco
        $ret = mysqli_query($id, $sql);

        // Verifica se a atualização foi bem sucedida
        if ($ret) {
            echo "<h4>Ocorrência atualizada com sucesso</h4>"; // Mensagem de sucesso
        } else {
            echo "<h4>Erro ao atualizar: </h4>"; // Mensagem de erro (poderia ser melhorada para mostrar o erro)
        }
        ?>

        <!-- Botão para voltar para a listagem das ocorrências -->
        <button id='voltar'><a href="listar_oco.php">Voltar</a></button>   
    </div>
</body>
</html>
