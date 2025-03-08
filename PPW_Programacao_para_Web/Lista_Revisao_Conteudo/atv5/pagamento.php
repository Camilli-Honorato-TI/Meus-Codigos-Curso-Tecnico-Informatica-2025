
<!DOCTYPE html>
<link rel="stylesheet" href="pagamento.css">
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento</title>
</head>
<body>
    <div class="fundo">
    <?php
        $nome = $_POST['nome'];
        $salario = $_POST['sal'];
        $mes = $_POST['mes'];
        $inss = $salario;
        $ir = $salario;
        $ir_conta = 0;
        $inss_conta= 0;

        /*Desconto INSS*/
        if($inss <= 1518.00 ){
            $inss_conta = $inss*(7.5/100);
        }else if($inss >= 1518.01 && $inss <= 2793.88){
            $inss_conta = $inss*(9/100);
        }else if($inss >= 2793.89 && $inss <= 4190.83){
            $inss_conta = $inss*(12/100);
        }else if($inss >= 4190.84 && $inss <= 8157.41){
            $inss_conta = $inss*(14/100);
        }

        /*Desconto IR*/
        if($ir >= 2259.21 && $ir <= 2826.65){
            $ir_conta = $ir *(7.5/100);
        }else if($ir  >= 2826.66 && $ir <= 3751.05){
            $ir_conta = $ir *(15/100);
        }else if($ir  >= 3751.06 && $ir <= 4664.68){
            $ir_conta = $ir *(22.5/100);
        }else if($ir  >= 4664.69){
            $ir_conta = $ir *(27.5/100);
        }

        /*13ª */
        $terceiro = ($salario/12)*$mes;

        /*Ferias */
        $ferias = $salario+($terceiro/3);


        echo "- Nome: $nome </br>";
        echo "- Salário: $salario </br>";
        echo "- Meses Trabalhados: $mes </br>";
        echo "- Desconto INSS: $inss_conta </br>";
        echo "- Desconto IR: $ir_conta </br>";
        echo "- Salário Décimo Terceiro: $terceiro </br>";
        echo "- Salário Férias: $ferias </br>";
    ?>
    </div>
</body>
</html>