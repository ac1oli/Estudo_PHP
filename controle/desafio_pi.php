<div class="titulo">Desafio PI</div>

<?php

echo pi();
$pi = 3.14;
$piErrado = 2.8;
echo '<br>' . $pi;
echo '<br>' . $piErrado;

if(($pi - pi()) <= 0.01) {
    echo "<br> iguais!";
} 

if($pi - $piErrado <= 0.01) {
    echo "<br> Iguais";
} else {
    echo "<br> Diferentes";
}



