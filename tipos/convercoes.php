<div class="titulo">Converções</div>

<?php

echo is_int(PHP_INT_MAX) . '<br>';
echo is_float(PHP_FLOAT_MAX). '<br>';
echo is_string("Texto") .'<br>';
echo is_bool(true). '<br>';

//int para float

echo var_dump(PHP_INT_MAX + 1);
echo '<br>';
echo var_dump(1 + 1.0);
echo '<br>';
echo (float) 3;

//Float para int
echo '<p> Float para int</p>';
var_dump((int) 6.8);
echo '<br>';
var_dump(intval(2.8));
echo '<br>';
var_dump((int)round(2.8));

//Operação com String
echo '<p>String</p>';
var_dump(3 + "2"); #aqui ele vai somar
echo '<br>';
var_dump("3" + 2); #aqui ele vai somar
echo '<br>';
var_dump("3" . 2); #aqui ele vai concatenar
echo '<br>', is_string("3" . 2);
echo '<br>', is_string(3 + "2"); #aqui não é uma string pois ao colocar o sinal de '+' ele faz uma soma e não uma concatenização
echo '<br>';

// var_dump(1 + "cinco"); #ERRO


