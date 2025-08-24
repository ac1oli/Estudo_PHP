<div class="titulo">Variáveis</div>

<?php

$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);
echo '<br>';

$a = 3;
$b = 16;
$soma = $a + $b;
echo $soma, '<br>';

echo isset($soma); 
#isset varifica se tem algum valor na variavel
unset($soma);
#unset - destroi o conteudo da varivel, como se apos o seu chamado, não resta mais nada.
var_dump($soma);
echo '<br>';
$soma = 100;
echo $soma;

//mudando o valor e tipo da variavel
$variavel = 10;
echo '<br>'. $variavel;
$variavel = "Alex";
echo '<br>'. $variavel;

//nomes de variaveis
$var = 'valida';
$var2 = 'Valida';
$VAR3 = 'valido';
$_var_4 = 'valido';
$vâr5 = 'valido'; #evitar
// $6var = 'invalido';
// $%var7 = 'invalido';
// $var8% = 'invalido';

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);