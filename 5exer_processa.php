<?php
// Recebe os dados do formulário
$numero = $_POST['numero'];
$operacao = $_POST['operacao'];

// Processa a operação
if ($operacao == "dobro") {
    $resultado = $numero * 2;
    echo "<h2>Resultado:</h2>";
    echo "<p>O dobro de $numero é <strong>$resultado</strong>.</p>";
} elseif ($operacao == "triplo") {
    $resultado = $numero * 3;
    echo "<h2>Resultado:</h2>";
    echo "<p>O triplo de $numero é <strong>$resultado</strong>.</p>";
} else {
    echo "<p>Operação inválida!</p>";
}
?>
