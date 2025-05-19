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
        $id_aluno   = $_POST['id_aluno'];    // ID do aluno a ser atualizado
        $nome       = $_POST['nome'];        // Novo valor para o nome do aluno
        $cpf        = $_POST['cpf'];         // Novo valor para o CPF do aluno
        $data_nasc  = $_POST['data_nasc'];  // Novo valor para a data de nascimento
        $email      = $_POST['email'];       // Novo valor para o email do aluno
        $telefone   = $_POST['tel'];         // Novo valor para o telefone
        $endereco   = $_POST['endereco'];    // Novo valor para o endereço
        $comp       = $_POST['complemento']; // Novo valor para o complemento do endereço
        $sexo       = $_POST['genero'];      // Novo valor para o sexo
        $pcd        = $_POST['pcd'];         // Novo valor para PCD (Pessoa com Deficiência)

        // Monta a instrução SQL para atualizar os dados do aluno na tabela
        $sql = "UPDATE alunos SET 
                    nome = '$nome',               
                    cpf = '$cpf',                 
                    data_nasc = '$data_nasc',    
                    email = '$email',             
                    telefone = '$telefone',       
                    endereco = '$endereco',      
                    complemento = '$comp',        
                    sexo = '$sexo',               
                    pcd = '$pcd'                  
                WHERE id_aluno = '$id_aluno'";  

        // Executa a consulta SQL no banco de dados
        $ret = mysqli_query($id, $sql);

        // Verifica se a atualização foi realizada com sucesso
        if ($ret) {
            echo "<h4>Aluno atualizado com sucesso</h4>"; // Mensagem de sucesso
        } else {
            echo "<h4>Erro ao atualizar: </h4>";          // Mensagem de erro
        }
        ?>

        <!-- Botão que redireciona para a página de listagem dos alunos -->
        <button id='voltar'><a href="listar.php">Voltar</a></button>   
    </div>
</body>
</html>
