<div class="titulo">Variavei Variaveis</div>

<?php

$a = 'valorA';
$$a = 'valorAA';

echo "$a {$$a} ${$a} $valorA";

$epa = 'opa';
$opa = 'vishi';
$vishi = 'Eita!!!';

echo '<br>', "$epa {$$epa} {$$$epa}";