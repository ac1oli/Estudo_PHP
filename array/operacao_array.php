<div class="titulo">Operações de Array</div>

<?php

$dados1 = [
    "nome" => "Jose",
    "idade" => 26
];

$dados2 = [
    "naturalidade" => "Fortaleza"
];

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


//ORGANIZA OS ARRAYS
print_r(sort($decimais));


//ESSA FUNÇÃO DO ARRAY É PARA PEGAR UM NUMERO ALEATORIO DO ARRAY INFORMADO
print_r(array_rand($decimais));
echo "<br><br>";

print_r(array_merge($decimais));






