<!DOCTYPE html>
<link rel="stylesheet" href="emprestimo.css">
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emprestimo</title>
</head>
<body>
    <div class="fundo">
        <?php
            $valorCasa = $_POST['valorCasa'];
            $salario = $_POST['salario'];
            $anos = $_POST['anos'];

            $prestacaoMensal = $valorCasa / ($anos * 12); 
            $limitePrestacao = $salario * 0.30;

            if ($prestacaoMensal <= $limitePrestacao) {
                echo "<h2>Empréstimo Aprovado!</h2>";
                echo "<p>Valor da Casa: R$ $valorCasa </p>";
                echo "<p>Salário do Comprador: R$ $salario</p>";
                echo "<p>Parcelamento: $anos anos</p>";
                echo "<p>Valor da Prestação Mensal: R$ </p>". number_format($prestacaoMensal, 2) ;
            } else {
                echo "<h2>Empréstimo Negado!</h2>";
                echo "<p>O valor da prestação mensal excede 30% do seu salário.</p>";
                echo "<p>Valor da Casa: R$ $valorCasa</p>";
                echo "<p>Salário do Comprador: R$ $salario </p>";
                echo "<p>Valor da Prestação Mensal: R$ </p>". number_format($prestacaoMensal, 2) ;
                echo "<p><strong>Não é possível aprovar o empréstimo.</strong></p>";
            }
        ?>
    </div>
</body>
</html>