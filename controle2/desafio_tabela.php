<div class="titulo">Desafio tabela</div>

<?php

    $array = [
        ['01', '02', '03', '04', '05'],
        ['06', '07', '08', '09', '10'],
        ['11', '12', '13', '14', '15'],
        ['16', '17', '18', '19', '20']
    ];

            
?>


<table>
    <tr>
        <th>L1</th>
        <th>L2</th>
        <th>L3</th>
        <th>L4</th>
        <th>L5</th>
    </tr>
    <?php

        foreach($array as $linhas){
            echo "<tr>";
            foreach($linhas as $valor){
                echo "<td> " . $valor . " </td>";
            }
            echo"</tr>";
        }
    
    ?>
</table>

<table>
    <tr>
        <th>P1</th>
        <th>P2</th>
        <th>P3</th>
        <th>P4</th>
        <th>P5</th>
    </tr>

    <?php

        foreach($array as $indice => $linhas){
            echo "<tr>";
            foreach($linhas as $valor){
                if($indice % 2 == 0){
                    echo "<td class='color-row'> " . $valor . " </td>";
                }else{
                    echo "<td> " . $valor . " </td>";
                }
            }
            echo"</tr>";
        }
    
    ?>
</table>


<style>

    table{
        border: 1px solid #444;
        border-collapse: collapse;
        margin-bottom: 25px;
        width: 500px;
    }

    table  tr{
        border: 1px solid #444;
        text-align: center;
        margin: 20px;
    }

    table > td{
        padding: 10px 20px;
    }

    .color-row{
        background-color: #999999c2;
    }

</style>