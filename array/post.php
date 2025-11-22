<div class="titulo">$_POST</div>

<style>
    *{
        font-size: 1.1em;
    }
    form > input, form > button{
        margin: 10px;
    }
</style>

<form action="#" method="post">

    <input type="text" name="nome" placeholder="Nome">
    <br>
    <input type="text" name="sobrenome" placeholder="Sobrenome">
    <br>
    <input type="text" name="idade" placeholder="idade">
    <br>
    <input type="text" name="peso" placeholder="Peso">
    <br>
    <button>Enviar</button>

</form>

<?php

    print_r($_POST);

?>