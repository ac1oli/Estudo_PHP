<div class="titulo">Argumentos Variaveis</div>

<?php


// AO CRIAR UMA FUNÇÃO COM PARAMETROS A GENTE QUANDO CHAMA ELA, PODE PASSAR VARIOS OUTROS PARAMETROS, PEREM A FUNÇÃO SO VAI PEGAR OS 2 PRIMEIROS QUE VC COLOCOU
    function soma($a, $b){
        return $a + $b;
    }

    echo soma(10, 20, 20, 34, 64, 2); //rs: 30
    echo "<br>";

// MAS CASO VC QUEIRA PASSAR VARIAS VARIAVEIS PARA UMA FUNÇÃO, VC PODE USAR OS ARGUMENTOS VARIAVEIS, QUE É UTILIZADO ASSIM:

    function somaReal(...$numeros){
        $soma = 0;
        foreach($numeros as $num){
            $soma += $num;
        }
        return $soma;
    }

    echo somaReal(10, 20, 20, 34, 64, 2); //rs: 150
    echo "<br>";

// CASO VA PASSAR UM ARRAY PARA A FUNÇÃO COM PARAMETROS VARIADOS, TEM QUE COLOCAR OS MESMOS '...'(3 PONTOS) QUE UTILIZOU COMO PARAMETRO NA FUNÇÃO, POIS, PQ SE NÃO VAI FICAR UM ARRAY DENTRO DE OUTRO, AI PARA EVITAR ISSO, PASSA O ARRAY COMO SE FOSSE UM ARGUMENTO VARIADO E VAI FICAR TUDO CERTINHO NA FUNÇÃO""

    $array = [4, 6, 10, 4];
    echo somaReal(...$array); //rs: 24

?>