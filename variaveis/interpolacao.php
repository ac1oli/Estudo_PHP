<div class="titulo">Interpolação</div>

<?php

$num = 10;
echo $num;
echo '<br> $num';
echo "<br> $num + 1 = " . $num + 1;

$txt = "a sua nota é $num";
echo "<br> $txt";

$obj = 'caneta';
echo "<br> Eu tenho 5 $obj";
echo "<br> Eu tenho 5 {$obj}s"; //ideal
echo "<br> Eu tenho 5 { $obj}s mas perdi 3 {$obj }s"; // Não é ideal