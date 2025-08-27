<div class="titulo">Operadores Logicos</div>

<?php

echo "<hr> <h4>Verdadeiro ou Falso</h4> <hr>";
var_dump(true);
echo '<br>';
var_dump(!true); //operador unario

echo "<hr> <h4>Tabela Verdade 'AND' (E)</h4> <hr>";
//Só vai ser verdade quando todos os parametros forem verdadeiro
//suponha que tenha 1000 condições utilizando o 'E', se uma tiver falsa, ela no geral vai ser falsa, mesmo as outras 999 sendo verdadeira
var_dump(true && true); 
var_dump(true && false); 
var_dump(false && true);
var_dump(false && false);
var_dump(false && true && true && true && true && true && true && true && true && true && true && true && true && true && true && true && true && true && true && true && true);//EX

var_dump(true AND true); 
var_dump(true AND false); 
var_dump(false AND true);
var_dump(false AND false);

echo "<hr> <h4>Tabela Verdade 'OR' (OU)</h4> <hr>";
//Para ser verdadeiro com o 'OU', so basta uma das condições ser verdadeira que vai ser verdadeira.
//suponha que tenha 1000 condições utilizando o 'OU', se uma tiver verdadeira, ela no geral vai ser verdadeira, mesmo as outras 999 sendo falsa
var_dump(true || true); 
var_dump(true || false); 
var_dump(false || true);
var_dump(false || false);
var_dump(false || false || false || false || false || false || false || false || false || false || false || false || false || false || false || false || false || false || true);//EX

var_dump(true OR true); 
var_dump(true OR false); 
var_dump(false OR true);
var_dump(false OR false);

echo "<hr> <h4>Tabela Verdade 'XOR' (!=)</h4> <hr>";
var_dump(true xor true); 
var_dump(true xor false); 
var_dump(false xor true);
var_dump(false xor false);

var_dump(true != true); 
var_dump(true != false); 
var_dump(false != true);
var_dump(false != false);

echo "<hr> <h4>Exemplo</h4> <hr>";
$idade = 62;
$sexo = 'F';

if ($idade >= 60 && $sexo === 'F') {
    echo "<br> Tem direito a aposenadoria -> $sexo";
} elseif($idade >= 65 && $sexo === 'M') {
    echo "<br> Tem direito a aposenadoria  -> $sexo";
} else {
    echo "<br> Vai trabanhar mais hehe";
}

?>

<style>
    p{
        color: red;
        margin-bottom: 0;
    }
    hr{
        margin: 3px;
    }
    h4{
        margin: 0;
        color: red;
    }
</style>