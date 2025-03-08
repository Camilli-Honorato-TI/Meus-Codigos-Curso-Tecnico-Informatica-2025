<!DOCTYPE html>
<html lang="pt-BR">
    <link rel="stylesheet" href="salario.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario</title>
</head>
<body>
    <div class="fundo">
    <?php
        $nome = $_POST['nome'];
        $salario = $_POST['salario'];
        $anos = $_POST['anos'];


        if ($anos <= 3) {
            $percentual = 3;
            $aumento = $salario+($salario*($percentual/100));
        } elseif ($anos < 10) {
            $percentual = 12.5;
            $aumento = $salario+($salario*($percentual/100));
        } else {
            $percentual = 20;
            $salario+($salario*($percentual/100));
        }

        echo "<h2>Resultado para: $nome</h2>";
        echo "<p>Salário Atual: R$ $salario</p>";
        echo "<p>Tempo de Empresa: $anos anos</p>";
        echo "<p>Aumento de: $percentual% </p>";
        echo "<p><strong>Novo Salário: R$ $aumento</strong></p>";
    ?>
    </div>
</body>
</html>