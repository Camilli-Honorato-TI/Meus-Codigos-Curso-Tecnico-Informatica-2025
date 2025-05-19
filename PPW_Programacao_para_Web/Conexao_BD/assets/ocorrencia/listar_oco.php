<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"> <!-- Define codificação de caracteres UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsivo para dispositivos móveis -->
    <title>Listar</title> <!-- Título da página -->
    <link rel="stylesheet" href="../css/style.css"> <!-- Arquivo CSS externo -->
</head>
<body> <!-- Corpo da página -->

    <div class="table"> <!-- Container para a tabela -->
        <table> <!-- Tabela para exibir as ocorrências -->
            <tr><td colspan="11"><h2>Listar ocorrencia</h2></td></tr> <!-- Cabeçalho principal -->
            <tr> <!-- Cabeçalho das colunas -->
                <th>Código da ocorrência</th>
                <th>Ocorrência</th>
                <th>Descrição</th>
                <th>Punição</th>
                <th>Tipo Punição</th>
                <th>Legislação</th>
                <th>Tipo Legislação</th>
                <th>Data criação</th>
                <th>Status</th>
                <th>Excluir</th>
                <th>Editar</th>
            </tr>
    </div>

<?php
include('../bd/conexao.php'); // Inclui conexão com o banco

$sql = "SELECT * FROM ocorrencias"; // Seleciona todas as ocorrências
$res = mysqli_query($id, $sql); // Executa a query

// Loop para percorrer as ocorrências e preencher a tabela
while($linha = mysqli_fetch_array($res)){ ?>
        <tr>
            <td> <?php echo $linha['id_ocorrencia']; ?> </td> <!-- Código da ocorrência -->
            <td> <?php echo $linha['ocorrencia']; ?> </td> <!-- Nome da ocorrência -->
            <td> <?php echo $linha['descricao']; ?> </td> <!-- Descrição -->
            <td> <?php echo $linha['punicao']; ?> </td> <!-- Punição -->
            <td> <?php echo $linha['tipo_punicao']; ?> </td> <!-- Tipo da punição -->
            <td> <?php echo $linha['legislacao']; ?> </td> <!-- Legislação -->
            <td> <?php echo $linha['tipo_legislacao']; ?> </td> <!-- Tipo da legislação -->
            <td> <?php echo $linha['data_criacao']; ?> </td> <!-- Data de criação -->
            <td> <?php echo $linha['status_']; ?> </td> <!-- Status da ocorrência -->
            <!-- Link para exclusão da ocorrência, passando o ID via GET -->
            <td><a href="excluir.php?id_ocorrencia=<?php echo $linha['id_ocorrencia']; ?>">
                <img src="../image/del.png" alt="Delete"></a></td>
            <!-- Link para edição da ocorrência, passando o ID via GET -->
            <td><a href="editar_oco.php?id_ocorrencia=<?php echo $linha['id_ocorrencia']; ?>">
                <img src="../image/edit.png" alt="Editar"></a></td> 
        </tr>
<?php } ?>

    <tr>
        <td colspan="11">
            <!-- Botão para voltar à página inicial -->
            <button id='voltar'><a href="../home/home.html">Voltar</a></button>
        </td>
    </tr>
    </table>

</body>
</html>
