<?php
// Recebe o número do formulário
$numero = $_POST['numero'];

// Multiplica por 7
$resultado = $numero * 7;

// Exibe o resultado
echo "<h2>Resultado da multiplicação:</h2>";
echo "<p>$numero × 7 = <strong>$resultado</strong></p>";
?>
