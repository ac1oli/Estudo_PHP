<div class="titulo">Desafio Switch</div>

<!-- Estilo da Pagina -->
<style>
    form > *{
        font-size: 1.3rem;
    }
</style>

<h3>Conversor de Unidades</h3>

<form action="#" method="POST">
    <input type="text" name="param" placeholder="Valor">
    <select name="conversao" id="conversao">
        <option value="km-milha"> Km ::- Milha</option>
        <option value="milha-km"> Milha ::- Km</option>
        <option value="metro-km"> Metro ::- Km</option>
        <option value="km-metro"> Km ::- Metro</option>
        <option value="celsius"> Fahrenheit ::- Celsius </option>
        <option value="fahrenheit"> Celsius ::- Fahrenheit </option>
    </select>
    <br>
    <button>Calcular</button>
</form>

<?php 

switch(strtolower($_POST['conversao'])) {
    case 'km-milha':
        $param = $_POST['param'];
        $converter = $param / 1.60934;
        $valorFinal = number_format($converter, 3, ',', '.');
        echo "Milhas:  <input type='text' id='result' value='$valorFinal'>";
        break;
    case 'milha-km':
        $param = $_POST['param'];
        $converter = $param * 1.60934;
        $valorFinal = number_format($converter, 3, ',', '.');
        echo "Quilometros(mi):  <input type='text' id='result' value='$valorFinal'>";
        break;
    case 'metro-km':
        $param = $_POST['param'];
        $converter = $param / 1000;
        $valorFinal = number_format($converter, 1, '.', ',');
        echo "Quilometros(me):  <input type='text' id='result' value='$valorFinal'>";
        break;
    case 'km-metro':
        $param = $_POST['param'];
        $converter = $param * 1000;
        $valorFinal = number_format($converter, 1, '.', ',');
        echo "Metros:  <input type='text' id='result' value='$valorFinal'>";
        break;

    case 'celsius':
        $param = $_POST['param'];
        $converter = ($param * (9/5)) + 32;
        $valorFinal = number_format($converter, 1, '.', ',');
        echo "Fahrenheit:  <input type='text' id='result' value='$valorFinal °'> ";
        break;

    case 'fahrenheit':
        $param = $_POST['param'];
        $converter = ($param - 32) * (5/9);
        $valorFinal = number_format($converter, 1, '.', ',');
        echo "Celsius:  <input type='text' id='result' value='$valorFinal °'> ";
        break;

}

?>