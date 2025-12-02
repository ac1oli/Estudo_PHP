<div class="titulo">Mapa</div>

<?php

// ARRAY CHAVE => VALOR
$dados = array(
    "idade" => 25,
    "nome" => "Alexsandro",
    "peso" => 67.8
);

print_r($dados);

echo '<br>' . $dados["idade"];
echo '<br>' . $dados["nome"];
echo '<br>' . $dados["peso"];

//CRIANDO DISCIONARIO COM LISTAS EM PHP
$df = array(

    "nome" => ["Alex", "Bruno", "Maria"],
    "idade" => [19, 30, 25],
    "peso" => [67.8, 70.8, 58.2]

);
echo "<br> <br>";


echo "Tipo do discionario em PHP: " . gettype($df);

echo "<br>";
foreach($df as $array){
    echo "<br> <br>";
    print_r($array[1]);
}
