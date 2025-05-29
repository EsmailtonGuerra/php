<?php
// definindo a idade
$idade = 12;

echo "idade informada: $idade anos<br>";

//verificando a categoria
if ($idade <5) {
    echo "sem categoria.";
}
    elseif ($idade >= 5 && $idade <=7)  {
        echo "categoria: infantil";

    }elseif ($idade >= 8 && $idade <= 10) {
echo "categoria: juvenil";

}elseif ($idade >= 11 && $idade <= 15) {  
    echo "categoria: adolescente";
} elseif ($idade >= 16 && $idade <= 30) { 
    echo "categoria adulto";
}
    else{
        echo "categoria: senhor";
        }
        ?>  