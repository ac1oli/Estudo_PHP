<div class="titulo">Switch</div>

<?php

$opcao = 2;
// A condição que for passada, vai ser o caso que sera executado.
switch($opcao) {
    case 1:
        echo "Opção 1 <br><br>";
        break; // para parar de rodar os demais 'case' e vai rodar o resto do codigo
    case 2: {
        echo "Opção 2 <br><br>";
        break; // para parar de rodar os demais 'case' e vai rodar o resto do codigo
    }
}

$categoria = 'sedan';

switch(strtolower($categoria)) {
    case 'luxo': 
        $carro = 'Mercedes';
        $preco = 25000.00;
        break;
    case 'suv':
    case 'suv basico':
        $carro = 'Renegade';
        $preco = 80000.00;
        break;
    case 'sedan': 
        $carro = 'Etios';
        $preco = 55000.00;
        break;
    default:
        $carro = 'Mobi';
        $preco = 33000.00;
        break;
}

$precoFinal = number_format($preco, 2, ',', '.' );
echo "Carro: $carro <br> Preço: $precoFinal";