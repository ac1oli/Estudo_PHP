<div class="titulo">Multidimencionais</div>

<?php

$dados = [

    //INDEX 0
    [
        "nome" => "Roberto",
        "idade" => "26",
        "naturalidade" => "São Paulo",
        "sexo" => "Homem",
    ],

    //INDEX 1
    [
        "nome" => "Maria",
        "idade" => "22",
        "naturalidade" => "Minas Gerais",
        "sexo" => "Mulher",
    ],

    //INDEX.....
];

print_r($dados);
echo "<br> <br>";

//EXIBINDO AS INFORMAÇÕES DO ARRAY COM BASE NO SEUS INDEX E NAS SUAS CHAVES

echo "Pessoa 1 : ";
echo "<br>";
echo "<br>" . "Nome : " . $dados[0]['nome'];
echo "<br>" . "Idade : " . $dados[0]['idade'];
echo "<br>" . "Naturalidade : " . $dados[0]['naturalidade'];
echo "<br>" . "Sexo : " . $dados[0]['sexo'];

echo "<br><br>";

echo "Pessoa 2 : ";
echo "<br>";
echo "<br>" . "Nome : " . $dados[1]['nome'];
echo "<br>" . "Idade : " . $dados[1]['idade'];
echo "<br>" . "Naturalidade : " . $dados[1]['naturalidade'];
echo "<br>" . "Sexo : " . $dados[1]['sexo'];

//ADICIONANDO MAIS UMA PESSOA NO ARRAY (INDEX 2)
$dados[] = [
    "nome" => "Pedro",
    "idade" => "40",
    "naturalidade" => "Recife",
    "sexo" => "Homem",
];

echo "<br><br>";

echo "Pessoa 3 : ";
echo "<br>";
echo "<br>" . "Nome : " . $dados[2]['nome'];
echo "<br>" . "Idade : " . $dados[2]['idade'];
echo "<br>" . "Naturalidade : " . $dados[2]['naturalidade'];
echo "<br>" . "Sexo : " . $dados[2]['sexo'];

?>