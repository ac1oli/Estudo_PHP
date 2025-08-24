<div class="titulo">Desafio de Esquação</div>

<?php

$numerador1 = pow(6 * (3+2),2) / (3 * 2);
echo 'numerador 1: '. $numerador1;
$numerador2 = pow((1 - 5) * (2 - 7) / 2, 2);
echo '<br>'. 'numerador 2: ' . $numerador2;
$denominador = pow(10,3);
echo '<br>'. 'denominador: ' . $denominador;

$resultado = pow($numerador1 - $numerador2, 3) / $denominador;

echo '<br>'. 'resultado: ' . $resultado;
