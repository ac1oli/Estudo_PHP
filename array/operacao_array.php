<div class="titulo">Operações de Array</div>

<?php

$dados1 = [
    "nome" => "Jose",
    "idade" => 26
];

$dados2 = [
    "naturalidade" => "Fortaleza"
];

//ADICIONANDO MAIS UM VALOR NO ARRAY
$dados2["endereço"] = "Ruazinha";

$dadosCompletos = $dados1 + $dados2;

print_r($dadosCompletos);

echo '<br><br>';

//VALIDA SE O DADO PASSADO É UM ARRAY
print_r(is_array($dadosCompletos));
echo "<br><br>";

//REMOVENDO UM VALOR DO NOSSO ARRAY
unset($dadosCompletos["nome"]);
print_r($dadosCompletos);
echo "<br><br>";

//CRIANDO OUTROS DOIS ARRAYS
$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

//JUNTANDO OS DOIS ARRAYS
$decimais = $pares + $impares;
print_r($decimais);
echo "<br><br>";


//A FUNÇÃO 'SORT' FAZ A ORDENAÇÃO DOS ARRAYS
sort($decimais);
print_r($decimais);
echo "<br><br>";


//ESSA FUNÇÃO DO ARRAY É PARA PEGAR UM NUMERO ALEATORIO DO ARRAY INFORMADO
print_r(array_rand($decimais));
echo "<br><br>";


//VAI TODOS OS VALORES DOS ARRAY, POREM DE FORMA DESORDENADA
print_r(array_merge($pares, $impares));






