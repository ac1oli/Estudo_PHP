<div class="titulo">Desafio Meses</div>

<?php 

    echo "SEM ESTA COM O INDEX CORRIGDO: ";
    $meses1 = array(

        "Janeiro",
        "Fevereiro",
        "Março",
        "Abril",
        "Maio",
        "Junho",
        "Julho",
        "Agosto",
        "Setembro",
        "Outubro",
        "Novembro",
        "Dezembro"
    );

    echo "<br> <br>";
    print_r($meses1);
    echo "<br> <br>";


    echo "COM O INDEX CORRIGIDO: ";
    $meses2 = array(

        1 => "Janeiro",
        2 => "Fevereiro",
        3 => "Março",
        4 => "Abril",
        5 => "Maio",
        6 => "Junho",
        7 => "Julho",
        8 => "Agosto",
        9 => "Setembro",
        10 => "Outubro",
        11 => "Novembro",
        12 => "Dezembro"
    );

    echo "<br> <br>";
    print_r($meses2);

?>