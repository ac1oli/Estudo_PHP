<div class="titulo">Laço de controle "FOR"</div>

<?php

//NA CRIAÇÃO DO FOR, ELE TEM QUE TER OBRIGATORIAMENTE 3 PARAMETROS
for($i = 1; $i <= 5; $i++){
    echo "$i <br>";
}

echo "<hr>";

//NESSA CRIAÇÃO ABAIXO DO FOR, ELE TEM 3 PARAMETROS, POREM O PRIMEIRO NÃO FOI DEFINIDO
for(; $i <= 10; $i++){
    echo "$i <br>";
}

echo "<hr>";

//NESSE PROXIMO CASO, IRA SER FEITO UM CASO SEM TER INICIADO 2 PARAMETROS, POREM ELE VAI TER QUE SER INCLUIDO NO BLOCO D ECODIGO, SE NÃO, VAI VIRAR UM LOOP INFINITO
for(; $i <= 15;){
    echo "$i <br>";
    $i++;
}

echo "<hr>";

$array = ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado'];

print_r($array);
echo "<br><br>";

//PERCORRENDO A LISTA DE ARRAY CRIADO ACIMA
for($i = 0; $i < count($array); $i++){
    echo "$array[$i], ";
}

echo "<br><br>";

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

for($i = 0; $i < count($matrix); $i++){
    for($j = 0; $j < count($matrix[$i]); $j++){
        echo "{$matrix[$i][$j]} ";
    }
    echo "<br>";
}

