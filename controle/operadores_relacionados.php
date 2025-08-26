<div class="titulo">Operadores Relacionais</div>

<?php

var_dump(1 == 1); // True
echo '<br>';
var_dump(1 > 1); // False
echo '<br>';
var_dump(1 >= 1); // True
echo '<br>';
var_dump(1 < 2); // True
echo '<br>';
var_dump(1 <= 2); // True
echo '<br>';
var_dump(1 != 1); // False
echo '<br>';
var_dump(1 <> 1); // False
echo '<br>';

var_dump(1 == "1"); // True pois aqui ele so verifica se existe algum dado igual naquele dado, mesmo sendo de outro tipo
echo '<br>';
var_dump(1 === "1"); // False pois aqui compara o tipo do dado
echo '<br>';
var_dump(1 == "123"); // False pois so tem o numero 1 nessa sequencia, equando na comparação tem 3;
echo '<br>';
var_dump(123 == "123"); //True pois aqui tem todos os dados iquais uns aos outros
echo '<br>';
var_dump(123 != "123"); //False pois ele valida que mesmo os tipos de dados sendo diferentes, o valor delas são iguais
echo '<br>';
var_dump(123 !== "123"); //True pois os tipos de dados são diferentes
echo '<br>';

echo "<p>Spaceship<hr></p>";

var_dump(50 <=> 30); // Positivo, se o operando da esquerda for maior que o da direita
var_dump(50 <=> 50); // 0, se caso os dois operandos forem iguais
var_dump(50 <=> 300); // Negativo, se o operando da direita for maior que o da esquerda

?>

<style>
    p{
        color: red;
        margin-bottom: 0;
    }
    hr{
        margin: 0;
    }
</style>
