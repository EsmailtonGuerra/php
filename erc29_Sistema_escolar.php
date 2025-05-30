<?php
$media = 8.3; 

if ($media < 0 || $media > 10) {
    echo "nota invalida";
} elseif ($media < 4) {
    echo "nota: $media - situaçao: reprovado com desempenho insuficiente.";
} elseif ($media <= 6 && $media <= 7.9) {
   echo "nota: $nota - situaçao: aprovado com desempenho regular.";
} elseif ($media >= 8 && $media <= 9.4) {
    echo "nota: $media - situaçao: aprovado com bom desempenho.";
} else { // de 9.5 a 10 
    echo "nota: $media - situaçao: Aprovado com exelencia!";   
    }
    ?>