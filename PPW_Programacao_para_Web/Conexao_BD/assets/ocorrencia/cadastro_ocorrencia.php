<!DOCTYPE html> <!-- Define o tipo do documento como HTML5 -->
<html lang="pt-BR"> <!-- Define o idioma da página como português do Brasil -->
<head>
    <meta charset="UTF-8"> <!-- Define a codificação de caracteres como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Garante que a visualização seja adequada em dispositivos móveis -->
    <title>Cadastro</title> <!-- Define o título da aba do navegador -->
    <link rel="stylesheet" href="../css/style.css"> <!-- Importa o arquivo CSS externo para estilização -->
</head>
<body>
<div class="cadastro">  <!-- Cria uma div com a classe 'cadastro' -->
    <?php
        // Inclui o arquivo de conexão com o banco de dados localizado na pasta 'bd'
        include('../bd/conexao.php');

            // Recebe os dados enviados via formulário (método POST)
            $ocorrencia = $_POST['ocorrencia']; // Recebe o valor do campo 'ocorrencia'
            $descricao = $_POST['descricao']; // Recebe o valor do campo 'descricao'
            $punicao = $_POST['punicao']; // Recebe o valor do campo 'punicao'
            $tipo_punicao = $_POST['tipo_punicao']; // Recebe o valor do campo 'tipo_punicao'
            $legislacao = $_POST['legis']; // Recebe o valor do campo 'legislacao'
            $tipo_legis = $_POST['tipo_legis']; // Recebe o valor do campo 'tipo_legis' 
            $data = $_POST['data']; // Recebe o valor do campo 'data'
            $status = $_POST['status']; // Recebe o valor do campo 'status'

            // Monta o comando SQL para inserir os dados na tabela 'usuario'
            $sql = "insert into ocorrencias(ocorrencia, descricao, punicao, legislacao, tipo_legislacao, tipo_punicao, data_criacao, status_)
            values('".$ocorrencia."', 
                    '".$descricao."',  
                    '".$punicao."',    
                    '".$tipo_punicao."',  
                    '".$legislacao."',       
                    '".$tipo_legis."',       
                    '".$data."',             
                    '".$status."')";       

            // Executa a consulta SQL na conexão definida em $id
            $ret = mysqli_query($id, $sql);

            // Verifica se a inserção foi bem-sucedida
            if($ret){
                // Exibe mensagem de sucesso
                echo"<h4>Ocorrência cadastrado com sucesso</h4>";
            }
            else{
                 // Exibe mensagem de erro caso a inserção falhe
                echo"<h4>Erro ao ocorrência</h4>";
            }

    ?>
    <!-- Botão que leva de volta para a página 'home.html' -->
    <button id='voltar'><a href="../home/home.html">Voltar</a></button>
</div>
</body>
</html>