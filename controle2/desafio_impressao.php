<div class="titulo">Desafio de Impressão</div>

<!-- 
Enunciado:
- Imprima apenas os valores do array que contem indice par
- Resolva com o for e foreach
- Valores esperados: AAA, CCC, EEE
-->

<?php

$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];

for($i = 0; $i < count($array); $i++){
    if($i % 2 == 0){
        echo "$array[$i],";
    }
}

echo "<hr>";

foreach($array as $indice => $letras){
    if($indice % 2 == 0){
        echo "$letras,";
    }
}