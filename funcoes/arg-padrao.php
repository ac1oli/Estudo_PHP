<div class="titulo">Argumentos Padrões</div>

<?php

    function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente'){
        return "Bem vindo, $nome $sobrenome ! <br>";
    }

    echo saudacao();
    echo saudacao(null);
    echo saudacao(null, null);
    echo saudacao('Alex', 'Acioli');

    echo "<hr>";

    function senha($senha = 12345){
        return "Sua senha padrão é: $senha <br>";
    }

    echo senha();
    echo senha(999999999);

    echo "<hr>";

    
    // É SEMPRE BOM, CASO VA TER ALGUM ARGUMENTO COM UM VALOR PADRÃO, POR ULTIMO, POIS SE NÃO VAI FICAR COMPLICADO NA HR DE VC CHAMAR ELA, PQ VC VAI TER QUE PASSAR CADA PARAMETRO E DEPOIS COLOCAR OS QUE DE FATO VC QUE ALTERE

    function lanche1($comida = 'Hamburguer', $bebida){
        echo "Sua comida: $comida <br>";
        echo "Sua bebida: $bebida <br>";
    }

    // lanche1('H2O'); ERROR
    lanche1('Hamburguer', 'H2O');

     echo "<hr>";

// AI SE A GENTE COLOCA O VALOR PADÃO NO FINAL, FICA MELHOR NA HR DE PASSAR OS PARAMENTROS, PARA NÃO S EOCNFUNDIR
    function lanche2($bebida, $comida = 'Hamburguer'){
        echo "Sua comida: $comida <br>";
        echo "Sua bebida: $bebida <br>";
    }

    lanche2('Cerveja');
    lanche2('Cerveja', 'Tiragosto');

