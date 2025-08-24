<div class="titulo">Constantes</div>

<?php

define('TAXA_DE_JUROS', 5.9); //deifine uma constante
echo TAXA_DE_JUROS;

const NOVA_TAXA = 10;
echo '<br>', NOVA_TAXA;

$valorVariavel =2.8;
// const NOVISIMA_TAXA = $valorVariavel; // ERRO
define('NOVISSICA_TAVA', $valorVariavel + 10); //da certo, e da para fazer ate operações matematicas
echo '<br>', NOVISSICA_TAVA;

echo '<br>' . PHP_VERSION;
echo '<br>' . PHP_INT_MAX;

echo '<br> Linha: ' . __LINE__;
echo '<br> Arquivo: ' . __FILE__;
echo '<br> Diretorio: ' . __DIR__;
