<div class="titulo">Valor VS Referencia</div>

<?php


// Variavel passando como 'VALOR'
$a = 10;
$b = $a;

echo $b;
$a++;
echo '<br>', $b;
echo '<br>', $a;


// Variavel passando como 'REFERENCIA'
$c = 'Alex';
$d = &$c;

echo '<br>', $d;
$c = 'Bruno';
echo '<br>', $d;
$d = 'Italo';
echo '<br>', $c;
