<div class="titulo">Desafio Sorteio</div>

<?php

$nomes = array("Elza", "Rapunzel", "Branca de Neve", "Ciderela", "Bela Adormecida", "Cininho");

$index = array_rand($nomes);
$namePricese = $nomes[$index];

echo "<h1><center>$namePricese</center></h1>";
