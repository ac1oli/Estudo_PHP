<div class="titulo">Constantes de Array</div>

<?php

const FRUTAS = [
    "Banana",
    "Laranja",
    "Maça",
    "Uva"
];

//ARRAY CONSTANTE NÃO SE PODE SOFRER ALTERAÇÃO, A PARTIR DO MOMENTO EM QUE ELE É CRIADO, NÃO PODE SER MUDADO.

//FRUTAS[] = "uva"; => ERRO.
//FRUTAS[2] = "uva"; => ERRO.
//FRUTAS[0] = "uva"; => ERRO.

$index = array_rand(FRUTAS);
echo "<div class='center'><h1>". FRUTAS[$index] . "</h1></div>";

?>

<style>
    .center{
       display: flex;
       justify-content: center;
    }
</style>