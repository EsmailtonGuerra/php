
<!DOCTYPE html>
<html lang="pt-br">
    <head>
<meta charset="UTF-8">
<title>Dobro e Triplo</title>
</head>
<body>
    <h2>Digite um número:</h2>

    <form method="post">
        <input type="number" name="numero" required>
        <input type="submit" value="calcular">
</form>

<?php
if (isset($_POST['numero'])) {
    $numero = floatval($_POST['numero']);
    $dobro = $numero * 2;
    $triplo = $numero * 3;


    echo "<h3>Resultado:</h3>";
    echo "<he>Numero digitado: $numero<br>";
    echo "Dobro: $dobro<br>";
    echo "Triplo: $triplo<br>";
}
?>
</body>
</html>
