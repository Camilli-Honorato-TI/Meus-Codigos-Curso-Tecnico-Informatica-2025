<!DOCTYPE html> <!-- Define o tipo de documento como HTML5 -->
<html lang="pt-BR"> <!-- Define o idioma da página como português do Brasil -->
<head>
    <meta charset="UTF-8"> <!-- Define a codificação de caracteres como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Ajusta a visualização para dispositivos móveis -->
    <title>Listar</title> <!-- Define o título da aba do navegador -->
    <link rel="stylesheet" href="../css/style.css"> <!-- Vincula o arquivo CSS externo -->
</head>
<body> <!-- Adicionei a tag body, que estava faltando -->

    <div class="table"> <!-- Container para a tabela -->
        <table>
            <tr><td colspan="12"><h2>Listar Aluno</h2></td></tr> <!-- Título da tabela -->
            <tr> <!-- Cabeçalho da tabela -->
                <th>Código do aluno</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Data Nascimento</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Endereço</th>
                <th>Complemento</th>
                <th>Sexo</th>
                <th>PCD</th>
                <th>Excluir</th>
                <th>Editar</th>
            </tr>
<?php
include('../bd/conexao.php'); // Inclui arquivo de conexão com o banco

$sql = "SELECT * FROM alunos"; // Consulta para selecionar todos os alunos
$res = mysqli_query($id, $sql); // Executa a consulta

// Loop para iterar sobre cada aluno retornado da consulta
while ($linha = mysqli_fetch_array($res)) { ?>
            <tr>
                <td> <?php echo $linha['id_aluno']; ?> </td> <!-- Exibe o ID do aluno -->
                <td> <?php echo $linha['nome']; ?> </td> <!-- Exibe o nome -->
                <td> <?php echo $linha['cpf']; ?> </td> <!-- Exibe o CPF -->
                <td> <?php echo $linha['data_nasc']; ?> </td> <!-- Exibe a data de nascimento -->
                <td> <?php echo $linha['email']; ?> </td> <!-- Exibe o email -->
                <td> <?php echo $linha['telefone']; ?> </td> <!-- Exibe o telefone -->
                <td> <?php echo $linha['endereco']; ?> </td> <!-- Exibe o endereço -->
                <td> <?php echo $linha['complemento']; ?> </td> <!-- Exibe o complemento -->
                <td> <?php echo $linha['sexo']; ?> </td> <!-- Exibe o sexo -->
                <td> <?php echo $linha['pcd']; ?> </td> <!-- Exibe se é PCD -->
                
                <!-- Link para deletar o aluno, passando o id_aluno via GET -->
                <td><a href="deletar.php?id_aluno=<?php echo $linha['id_aluno']; ?>">
                    <img src="../image/del.png" alt="Delete"></a>
                </td>
                
                <!-- Link para editar o aluno, passando o id_aluno via GET -->
                <td><a href="editar.php?id_aluno=<?php echo $linha['id_aluno']; ?>">
                    <img src="../image/edit.png" alt="Editar"></a>
                </td>
            </tr>
<?php } // Fecha o while ?>
            <tr>
                <td colspan="12">
                    <!-- Botão para voltar à página inicial -->
                    <button id='voltar'><a href="../home/home.html">Voltar</a></button>
                </td>
            </tr>
        </table>
    </div> <!-- Fecha o container da tabela -->
</body>
</html>
