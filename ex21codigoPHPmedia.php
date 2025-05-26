<?php
$nota1 = 7.5;
$nota2 = 8.0;
$nota3 = 9.0;

// calcula a media
$media = ($nota1 + $nota2 + $nota3) / 3;

// exiba as notas e as medias
echo "nota 1: $nota1\n";
echo "nota 2: $nota2\n";
echo "nota 3: $nota3\n";
echo "media: " . number_format($media, 2); // formata com duas casas decimais
?>