<!DOCTYPE html> <!-- Define que o documento é HTML5 -->
<html lang="pt-BR"> <!-- Define o idioma da página como português do Brasil -->
<head>
    <meta charset="UTF-8"> <!-- Define a codificação dos caracteres para UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Ajusta para visualização correta em dispositivos móveis -->
    <title>Cadastro</title> <!-- Título da página -->
    <link rel="stylesheet" href="../css/style.css"> <!-- Link para o arquivo CSS externo -->
</head>
<body>
<div class="cadastro"> <!-- Div container para o formulário de cadastro -->

    <?php
        include('../bd/conexao.php'); 
        // Inclui o arquivo de conexão com o banco de dados para permitir comunicação

        // Recebe os dados enviados pelo formulário via método POST
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $data = $_POST['data_nasc'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $endereco = $_POST['endereco'];
        $comp = $_POST['comp'];
        $genero = $_POST['genero'];
        $pcd = $_POST['pcd'];

        // Monta a query SQL para inserir os dados na tabela 'alunos'
        $sql = "insert into alunos(nome, cpf, data_nasc, email, telefone, endereco, complemento, sexo, pcd)
                values('".$nome."',
                       '".$cpf."',
                       '".$data."',
                       '".$email."',
                       '".$tel."',
                       '".$endereco."',
                       '".$comp."',
                       '".$genero."',
                       '".$pcd."')";

        // Executa a query no banco usando a conexão ($id)
        $ret = mysqli_query($id, $sql);

        // Verifica se a inserção foi bem sucedida
        if($ret){
            echo"<h4>Aluno cadastrado com sucesso</h4>"; // Mensagem de sucesso
        }
        else{
            echo"<h4>Erro ao cadastrar</h4>"; // Mensagem de erro
        }
    ?>

    <button id='voltar'><a href="../home/home.html">Voltar</a></button> <!-- Botão para voltar à página inicial -->
</div>
</body>
</html>
