<!DOCTYPE html>
<link rel="stylesheet" href="terreno.css">
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terreno</title>
</head>
<body>
    <div class="fundo">
    <?php
    $largura = $_POST["largura"];
    $comprimento = $_POST["comprimento"];

    $terreno = $largura * $comprimento;

    if($terreno < 100){
        echo "O tamanho do terreno é de: $terreno m², terreno popular!";
    }else if($terreno >= 100 && $terreno <= 500){
        echo "O tamanho do terreno é de: $terreno m², terreno master!";
    }else{
        echo "O tamanho do terreno é de: $terreno m², terreno vip!";
    }	
    ?>
    </div>
</body>
</html>
