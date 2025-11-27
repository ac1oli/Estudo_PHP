<div class="titulo">Desafio Palindromo</div>

<?php

    // $nome = strtoupper('arara');
    // $count = mb_strlen($nome);
    // $rev = strrev($nome);

    // if($nome == $rev){
    //     echo "sim o nome $nome é um polindromo";
    // }else{
    //     echo "Não é um palindromo";
    // }

    palindromo('bola');
    echo "<br>";
    palindromo('pop');
    echo "<br>";
    palindromo('legal');
    echo "<br>";
    palindromo('arara');
    echo "<br>";
    palindromo('test');


    function palindromo($name){

        $nome = strtolower($name);
        $rev = strrev($nome);

        if($nome === $rev){
            echo "sim, o nome '$nome' é um polindromo";
        }else{
            echo "Não, o nome '$nome' não é  um palindromo";
        }
    }

?>