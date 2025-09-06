<div class="titulo">Operador Ternario</div>

<?php

$idade = 70;

$status;

if($idade >= 18){
    $status = 'Maior de Idade';
} else {
    $status = 'Menor de Idade';
}

echo "$status <br>";

//Como funciona o operador ternario
//Chama a variavel que vai receber o valor, depois coloca a condição que vai ter que ser verificada, logo apos,tem o sinal de '?' que vai ser exibido as informações que tiverem depois dela, caso essa condição seja verdadeira, se não, vai exibir as informações apos os ':'.
$status = $idade >= 18 ? 'Maior de Idade' : 'Menor de Idade';
echo "$status <br>";


$sexo = 'H';
$identificador = $sexo === 'H' ? 'Sexo Homem' : 'Sexo Mulher';
echo "$identificador <br>";