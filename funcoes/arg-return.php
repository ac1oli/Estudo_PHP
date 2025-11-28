<div class="titulo">Argumentos e Retornos</div>


<?php

//CRIANDO UMA FUNÇÃOQ VAI RECEBER ALGUNS PERAMETROS

$a = 10;
$b = 8;

echo "A: " . $a;
echo "<br>";
echo "B: " . $b;
echo "<br><br>";

function soma($a, $b){
    echo "Valor da soma: " . $a + $b;
}


//AQUI EU TO CHAMANDO A FUNÇÃO MAS PASASNDO OS VALORES DOS PARAMETROS QUE ELE ESTA ESPERANDO QUE NO CASO É DOIS VALOERS NUMERICOS
soma($a, $b);

//AGORA IRA SER CRIADO UMA FUNÇÃO DE MULTIPLICAÇÃO, POREM COM RETORNO

function multi($a, $b){
    return $a * $b;
}


echo "<br>O valor da multiplicação é: " . multi($a, $b);

//QUANDO UTILIZAMOS UMA FUNÇÃO COM RETORNO É MELHOR POIS A GENTE PODE UTILIZAR O RETORNO DA FORMA QUE A GENTE QUISER, COM EXPREÇÕES MATEMATICAS OU FORMATAÇÕES, OQ QUISER

//EXEMPLO
echo "<br>Pegando o retorno e dividindo por 10 é: " . multi($a,$b) / 10;

//AO CRIAR UMA FUNÇÃO O VALOR DA VARIAVEL QUE FOI CRIADA FORA E ESTA MANIPULANDO ELA DENTRO DA FUNÇÃO, ELE FORA DA FUNÇÃO NÃO VAI TER NENHUM RESULTADO, A NÃO SER QUE VC PASSE QUE ELE IRAR SOFRER ALGUMA ALTERAÇÃO

//ASSIM:

function nenhumaTroca($a){
    $a = 20;
    echo "Valor da variavel dentro da função (ST): ". $a;
}

echo "<hr>";
nenhumaTroca($a);
echo "<br>";
echo "Valor da variavel fora da função (ST): " . $a;

//AGORA IRÁ SER FEITO A FUNÇÃO QUE TROCARÁ O VALOR DA VERIAVEL SEM SER APENAS DA FUNÇÃO, A GENTE VAI PASSAR A VARIAVEL COM O O SINAL DE '&' PARA QUE ELA TROQUE O VALOR DA VARIAVEL E NÃO APENAS FAÇA UMA COPIA DELA DENTRO DA FUNÇÃO

//ASSIM:

function trocaReal(&$a){
    $a = 30;
    echo "Valor da variavel dentro da função (TR): ". $a;
}

echo "<hr>";
trocaReal($a);
echo "<br>";
echo "Valor da variavel fora da função (TR): " . $a;

?>