<div class="titulo">Closure e Callable</div>

<?php

//Criando uma função para entender melhor o funcionamento do closure e do callable

// function teste(callable $callback){
//     return $callback;
// }

// echo teste('Alex');


//DESSA PROXIMA FORMA, É UM JEITO CERTO, POIS OQUE A FUNÇÃO ESTA RECEBENDO É OUTRA FUNÇÃO:

// function teste(callable $callback){
//     return $callback();
// }

// echo teste(function(){
//     var_dump('anonymous function');
// });


//DESSA FORMA ABAIXXO A GENTE ESTA PASSANDO UMA VARIAVEL COM NOME PARA UMA FUNÇÃO QUE ESTA ESPERANDO UMA OUTRA FUNÇÃO, POIS QUANDO A GENTE VAI COLOCAR UMA FUNÇÃO QUE TEM RETORNO, E FOR PASSAR COMO PARAMETRO DA OUTRA FUNÇÃO, SIMPLISMENTE VC NÃO ESTARA PASSANDO UMA FUNÇÃO PARA OUTRA FUNÇÃO, VC VAI ESTA PASSANDO UM RETORNO DE UMA FUNÇÃO PARA OUTRA FUNÇÃO, ENT VAI GERAR UM ERRO, AI PARA EVITAR ESSE ERRO, A FUNÇÃO COM NOME, TEM QUE SER PASSADA ENTRE ASPAS SIMPLES E SEM OS PARENSES.

// function teste(callable $callback){
//     return $callback();
// }

// function func(){
//     return('function with name');
// }

// echo teste('func');

//CASO NÃO QUEIRA PASSARO CALLABLE NO PARAMETRO DA FUNÇÃO, VC PODE FAZER UMA VALIDAÇÃO, PARA VALIDAR SE AQUELO QUE ESTA VINDO É UMA FUNÇÃAO OU NÃO.

function teste($callback){
    if(is_callable($callback)){
        return $callback();
    }

    return 'not callback';
}

function func(){
    return('function with name');
}

echo teste(func());

?>