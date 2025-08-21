<div class="titulo">Tipo String</div>

<?php

echo 'Eu sou uma String <br>';
var_dump("Eu também"); # pelofato deu esta utilizando UTF-8,acaba contando o acento como um caracter.
echo '<br>';

//Concatenação
echo "Essa é uma palavra " . "e essa é outra", '<br>';
echo "Pode ser com ", "virgula ", "quando esta exibindo com ", "echo", '<br>';

echo "'Teste'" . '"Teste"' . '\'Teste\' ' . "\"Teste\" " . '<br>';

print("Tambem tem a função print");

//Algumas funções
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra Maiuscula');
echo '<br>' . ucwords('inicio de todas as palavras com a letra maiuscula');
echo '<br>' . strlen('Quantidade de letras');
echo '<br>' . mb_strlen('Calcula com mais precição, ate mesmo as teras com acento');
echo '<br>' . substr('exibi so algumas partes do texto selecionado', 0, 24);
echo '<br>' . str_replace('isso', 'isto', 'irá trocar isso por isso');



?>