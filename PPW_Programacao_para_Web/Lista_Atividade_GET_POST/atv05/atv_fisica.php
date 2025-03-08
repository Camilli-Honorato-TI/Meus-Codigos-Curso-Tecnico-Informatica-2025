<!DOCTYPE html>
<link rel="stylesheet" href="atv_fisica.css">
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atv.Fisica</title>
</head>
<body>
    <div class="fundo">
    <?php
        $horas = $_POST['horas'];
        $pontos = 0;
        $valorTotal = 0;

        if ($horas < 10) {
            $pontos = $horas * 2; 
        }else if ($horas >= 10 && $horas < 20) {
            $pontos = $horas * 5;
        } else {
            $pontos = $horas * 10; 
        }

        $valorTotal = $pontos * 0.05;

        echo "<h2>Resumo da Atividade</h2>";
        echo "<p>Horas de Atividade: $horas horas</p>";
        echo "<p>Pontos Acumulados: $pontos pontos</p>";
        echo "<p>Valor Total a Receber: R$ $valorTotal</p>";
        ?>
    </div>
</body>
</html>