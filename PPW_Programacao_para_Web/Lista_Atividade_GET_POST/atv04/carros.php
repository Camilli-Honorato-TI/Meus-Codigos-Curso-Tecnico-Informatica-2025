<!DOCTYPE html>
<link rel="stylesheet" href="carros.css">
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carro</title>
</head>
<body>
    <div class="fundo">
    <?php
        $carro = $_POST['carro'];
        $dias = $_POST['dias'];
        $km = $_POST['km'];

        if ($carro == 'popular'){
            $valorDia = 90;
            if ($km <= 100) {
                $valorKm = 0.20;
            } else {
                $valorKm = 0.10;
            }
        } else { // Carro de luxo
            $valorDia = 150;
             if ($km <= 200) {
                $valorKm = 0.30;
            } else {
                $valorKm = 0.25;
            }
        }

        $valorAluguel = $valorDia * $dias;
        $valorKmTotal = $km * $valorKm;
        $valorTotal = $valorAluguel + $valorKmTotal;

        echo "<h2>Resumo do Aluguel</h2>";
        echo "<p>Tipo de Carro: $carro </p>";
        echo "<p>Valor do Aluguel (R$ $valorDia por dia): R$ $valorAluguel </p>";
        echo "<p>Quilômetros Percorridos: $km km</p>";
        echo "<p>Preço por km: R$ $valorKm por km</p>";
        echo "<p>Valor total por km: R$ $valorKmTotal </p>";
        echo "<p><strong>Valor Total a Pagar: R$ $valorTotal</strong></p>";
    ?>
    </div>
</body>
</html>