<div class="titulo">Desafio PI</div>

<?php

echo pi();
$pi = 2.8;
echo '<br>' . $pi;

if((abs($pi - pi())) >= 0.001) {
    echo "<br> iguais!";
} else {
    echo "<br> diferente";
}

echo abs($pi - pi());


