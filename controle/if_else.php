<div class="titulo">If Else</div>

<?php

$nota1 = 10;
$nota2 = 1;

$media = ($nota1 + $nota2) / 2;

if($media >= 7) {
    echo "Aprovado com a media: $media";
}else if($media >= 6){
    echo "Recuperação com a media: $media";
}else{
    echo "Reprovado com a media: $media";
}