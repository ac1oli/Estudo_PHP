<div class="titulo">Foreach</div>

<?php

$array = [
    "Domingo",
    "Segunda",
    "Terça",
    "Quarta",
    "Quinta",
    "Sexta",
    "Sabado"
];

foreach($array as $a){
    echo $a;
    echo "<br>";
} 

echo "<hr>";

$array2 = [
    ['a','e','i','o','u'],
    ['b','c','d']
];

foreach($array2 as $linhas){
    foreach($linhas as $colunas){
        echo "$colunas ";
    }
    echo "<br>";
}

echo "<hr>";

$numeros = [1,2,3,4,5];

foreach($numeros as &$dobrar){
    $dobrar *= 2;
    echo "$dobrar <br>";
}



?>