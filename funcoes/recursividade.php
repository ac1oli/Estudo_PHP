<div class="titulo">Recursividade</div>

<?php

    $num = 4;
    
    function fat($fatorial){
        $multi = 1;
        for($i = $fatorial; $i > 0; $i--){
            $multi *= $i;
        }
        return $multi;
    }

    echo "Fatorial de $num = ". fat($num) . "<br>";


    //Uilizando a forma recursiva:
    function fatRecursivo($fatorial){
        if ($fatorial === 1){
            return 1;
        }
        return $fatorial *= fatRecursivo($fatorial - 1);
    }

    echo "Fatorial de 3 = ". fatRecursivo(3);

?>
