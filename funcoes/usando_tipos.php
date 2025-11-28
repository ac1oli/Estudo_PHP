<div class="titulo">Usando Tipos</div>

<?php

//TEMOS 3 FORMAS DE USAR OS TIPOS DE VARIAVEIS EM FUNÇÕES EM PHP, POIS COMO SABE, NÃO É POSSIVEL FORÇAR UMA VARIAVEL A TER UM DETERMINADO TIPO, COMO: int $valor.

//POREM AS COISAS MUDAM QUANDO VAI PARA FUNÇÃO, POIS A GENTE PODE OBRIGAR QUE O VALOR PASSADO SEJA UM TIPO DE VALOR, QUE A FUNÇÃO ESTAJA ESPERANDO, NÃO UM VALOR ALEATORIO, COMO:

function somar1($a, $b){
    return $a + $b;
}

echo somar1(10, '5Cinco') . "<br>"; // DÁ U ERRO MAS MESMO ASSIM ELE PEGA ESSE VALOR '5' NO COMEÇO DA PALAVRA E SOMA

function somar2(int $a, int $b){
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

// echo somar2(10, 'Texto'); ERROR
// echo somar2(10, '6 Cinco'); ERROR TBM
echo somar2(2.4, 3.1); //ELE NÃO VAI CONTAR AS CASAS DECIMAIS, SO O VALOR INTEIRO MESMO
echo "<br>";


//NESSE OUTRO CASO, O VALOR DO return QUE SERA CONVERTIDA PARA INTEIRO, 
function somar3($a, $b): int{
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}
echo "<br>";


echo somar3(20,3);
echo "<br>";
echo somar3(4, '3dois'); // DÁ U ERRO MAS MESMO ASSIM ELE PEGA ESSE VALOR '3' NO COMEÇO DA PALAVRA E SOMA
echo "<br>";
// echo soma3(3.6, 9.2); ERROR



?>