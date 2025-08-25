<div class="titulo">If Else</div>

<?php

$nota1 = 10;
$nota2 = 1;

$media = ($nota1 + $nota2) / 2;

if($media >= 7) { // primeira verificaçõa
    echo "Aprovado com a media: $media";
}else if($media == 6){ // segunda verificação
    echo "Recuperação com a media: $media";
}else{ // caso não seja senhuma das veriicações a cima
    echo "Reprovado com a media: $media";
}