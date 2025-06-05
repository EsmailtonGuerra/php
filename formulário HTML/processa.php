<?php
// Captura os valores do formulário
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];
$num4 = $_POST['num4'];
$num5 = $_POST['num5'];

// Calcula o produto
$produto = $num1 * $num2 * $num3 * $num4 * $num5;

// Exibe o resultado
echo "<h2>Resultado da multiplicação:</h2>";
echo "<p>$num1 × $num2 × $num3 × $num4 × $num5 = <strong>$produto</strong></p>";
?>
