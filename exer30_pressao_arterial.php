<?php
$pressao = 142; // Valor da pressão sistólica (em mmHg). Altere para testar outros resultados.

if (!is_numeric($pressao) || $pressao < 0) {
    echo "Valor inválido para pressão.";
} elseif ($pressao < 90) {
    echo "Pressão: $pressao mmHg - Risco: Hipotensão (pressão baixa)";
} elseif ($pressao >= 90 && $pressao <= 119) {
    echo "Pressão: $pressao mmHg - Situação: Pressão ideal";
} elseif ($pressao >= 120 && $pressao <= 129) {
    echo "Pressão: $pressao mmHg - Situação: Pressão normal alta";
} elseif ($pressao >= 130 && $pressao <= 139) {
    echo "Pressão: $pressao mmHg - Situação: Pré-hipertensão (atenção necessária)";
} elseif ($pressao >= 140 && $pressao <= 159) {
    echo "Pressão: $pressao mmHg - Situação: Hipertensão Estágio 1";
} elseif ($pressao >= 160 && $pressao <= 179) {
    echo "Pressão: $pressao mmHg - Situação: Hipertensão Estágio 2";
} else { // 180 ou mais
    echo "Pressão: $pressao mmHg - Situação: Crise hipertensiva – risco de vida!";
}
?>
