<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Salário com Aumento</title>
</head>
<body>
    <h2>Informe o salário:</h2>
    <form method="post" action="">
        <input type="number" name="salario" step="0.01" required>
        <input type="submit" value="Calcular aumento">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $salario = floatval($_POST["salario"]);
        $aumento = $salario * 0.30;
        $novoSalario = $salario + $aumento;

        echo "<h3>Resultados:</h3>";
        echo "Salário informado: R$ " . number_format($salario, 2, ',', '.') . "<br>";
        echo "Aumento de 30%: R$ " . number_format($aumento, 2, ',', '.') . "<br>";
        echo "Novo salário: R$ " . number_format($novoSalario, 2, ',', '.') . "<br>";
    }
    ?>
</body>
</html>
