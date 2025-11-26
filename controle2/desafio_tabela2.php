<div class="titulo">Desafio da tabela 2</div>

<form action="#" method="post">
    <label for="linhas"> Linhas</label>
    <input type="number" id="linhas" name="linhas" placeholder="Digite a quantidade de linhas" value=<?=$_POST['linhas'] ?? 5?>>
    <br>

    <label for="colunas">Colunas</label>
    <input type="number" id="colunas" name="colunas" placeholder="Digite a quantidade de colunas" value=<?=$_POST['colunas'] ?? 5?>>
    <br>
    <button>Gerar Tabela</button>
</form>


<table>

<?php

    $linhas = $_POST['linhas'] ?? 5;
    $colunas = $_POST['colunas'] ?? 5;
    $numbers = 1;


//Amostrar os indices
    $count = 0;
    echo "<tr style='color:red;'>";
    do{
        $indice_coluna = $count == 0 ? '+': $count - 1;
        echo "<th style='border: 1px solid black;'>$indice_coluna</th>";
        $count++;
    }while($count <= $colunas);
    echo "</tr>";


//Resposta do desafio :)
    for($i = 0; $i < $linhas; $i++){
        echo "<tr>";
        echo "<th style='color:red; border: 1px solid black;'>$i</th>";
        for($j = 0; $j < $colunas; $j++){
            
            echo "<td style='border: 1px solid black;'>$numbers</td>";
            $numbers++;
        }
        echo "</tr>";
    }

?>

</table>


<style>
    form{
        display: flex;
        flex-direction: column;
        /* border: 1px solid red; */
        justify-content: center;
        align-items:center;
        width: 400px;
        margin: auto;
        background-color: black;
        border-radius: 10px;
        color: white;
    }
    form > input, form > button{
        width: 200px;
        margin: 20px;
        border-radius: 10px;
    }

    table{
        /* text-align: center; */
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 25px auto;
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
    table > th{
        padding: 10px 20px;
        background: #999;
    }
</style>