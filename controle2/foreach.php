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



?>