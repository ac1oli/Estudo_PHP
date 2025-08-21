<div class="titulo">Desafio Precendencia</div>

<?php

echo '<p> 1. Qual o valor será impresso? </p> <br>';
echo 2 + 5 * 3 + (12 / 6) / (-8 + 2 ** 1 /*3*/), '<br>'; # Erro, posi acaba tendo uma divisão por zero.

echo '<p> 2. Qual expressão imprime o valor 100 </p> <br>';
echo  3 + (3*8) / 2 - 3; #3 + 24 / 2 - 3 => 3 + 12 - 3 => 12
?>