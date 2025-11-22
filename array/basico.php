<div class="titulo">Basico de Array</div>

<?php

$lista = array("teste1", "teste2", "teste3", 10, 20.1);

var_dump($lista);      
echo "<br> <br>";

print_r($lista);
echo "<br> <br>";

echo "<br>" . $lista[0];
echo "<br>" . $lista[1];
echo "<br>" . $lista[2];
echo "<br>" . $lista[3];
echo "<br>" . $lista[4];

$texto = 'Texto teste';

echo '<br>' . $texto[10];
echo '<br>' . mb_substr($texto, 0, 1);
