<div class="titulo">Desafio Operadores Logicos</div>

<!-- 
    Dois trabalhos -> terça e quinta!
        - se os dois forem executados -> TV 50' e sorvete;
        - se so 1 for executado -> TV 32' e sorvete;
        - se nenhuma for executada -> Ficar em casa.
-->

<form action="#" method="post">

    <div>
        <label for="job1">Trabalho na Terça</label>
        <select name="job1" id="job1">
            <option value="">Fiz nada</option>
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>

    <div>
        <label for="job2">Trabalho na Terça</label>
        <select name="job2" id="job2">
            <option value="">Fiz nada</option>
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>

    <button>Enviar</button>

</form>

<style>

    button, select {
        font-size: 1.4rem;
    }

</style>

<?php
    if(
        (isset($_POST['job1']) && trim($_POST['job1']) !== "") ||
        (isset($_POST['job2']) && trim($_POST['job2']) !== "")
    ) {
        // echo "Valores informados com sucesso";
        // var_dump($_POST['job1']);
        // var_dump($_POST['job2']);

        if(!!$_POST['job1'] && !!$_POST['job2']) {
            echo "<br> Foi ao Shopping e comprou uma TV de 50' e tomou um sorvete com a familia";
        } elseif (
            (!!$_POST['job1'] && !$_POST['job2']) xor
            (!$_POST['job1'] && !!$_POST['job2'])
        ) {
            echo "<br> Foi ao Shopping e comprou uma TV de 32' e tomou um sorvete com a familia";
        } else {
            echo "<br> Ficou em casa com a familia";
        }
    } else {
        echo "Por favor, informar no formulario se fez ou não em ambos";
    }