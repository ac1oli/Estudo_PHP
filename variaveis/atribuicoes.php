<div class="titulo">Atribuições</div>

<?php

$numero = 10;

echo $numero;
$numero  = $numero + 1;
echo '<br>', $numero;
$numero = $numero - 2.5;
echo '<br>', $numero;
$numero--; // O resultado vai ser numero - 1
--$numero; // O resultado vai ser numero - 1
echo '<br>', $numero;
$numero++; // O resultado vai ser numero + 1
++$numero; // O resultado vai ser numero + 1
echo '<br>', $numero;
$numero -= 5;
echo '<br>', $numero;
$numero += 10;
echo '<br>', $numero;
$numero *= 8;
echo '<br>', $numero;
$numero /= 10;
echo '<br>', $numero;
$numero %= 9;
echo '<br>', $numero;


$txt = "Esse é um texto";
echo '<br>', $txt;
$txt = $txt . ' qualquer';
echo '<br>', $txt;

// $variavelTeste = "Teste :)";
// echo '<br>', $variavelTeste;
$teste = $variavelTeste ?? 'valor default'; // caso o valor não for passado, vai exibir um valor padrão
echo '<br>', $teste;
