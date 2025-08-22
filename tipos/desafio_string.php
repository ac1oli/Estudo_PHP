<div class="titulo">Desafio String</div>

<?php

/*Enunciado: Avaliando os metodos da documentação da string, qual o metodo que a posicao do texto 'abc' na string '!AbcaBcabc' retorne 1 ? */

$str_String = "!AbcaBcabc";
$str_subString = "abc";
$verificacao = stripos($str_String,$str_subString);

if($verificacao === false){
    echo "A string $str_subString, não foi encontrada";
}else{
    echo "return " . $verificacao;
}