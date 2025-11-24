<div class="titulo">Desafio For</div>

<!-- 
Usar o For.....
#
##
###
####
1) Pode usar incremento $i++
2) Não pode usar incremento $i++
-->

<form action="#" method="post">
    <input type="number" name="num1" placeholder="Digite a largura da arvore">
    <br>
    <button>Enviar</button>
</form>


<?php

    $num = $_POST['num1'];
   
    // 1)
    for($i = 1; $i <= $num; $i += 2){
        echo "<div class='arvore'>" . str_repeat('#', $i). "</div> \n";
        // echo "<hr>";
    }
?>

<style>

    *{
        margin:0;
    }

    form{
        display: flex;
        justify-content: center;
        gap: 25px;
        margin-bottom: 100px;
    }

    form > input{
        width: 200px;
    }

    .arvore{
        margin: 0;
        text-align: center;
        padding: 0;
        font-size: 16px;
    }
</style>