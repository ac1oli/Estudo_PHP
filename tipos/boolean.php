<div class="titulo">Tipo Boolean</div>

<?php

echo "- Aqui é falso: " . false . var_dump(false); #Retorna 0 ou nada
echo '<br>';
echo "- Aqui é verdadeiro: " . true . var_dump(true); #Retorna 1 ou verdadeiro.
echo '<br>';

//Regra de conversão boolean

echo '<p>Regras</p>';
echo '<br>'. var_dump((bool) 0); #apenas zero é falso
echo '<br>'. var_dump((bool) 20);
echo '<br>'. var_dump((bool) -10);
echo '<br>'. var_dump((bool) 0.0); #Falso
echo '<br>'. var_dump((bool) 0.00000001);
echo '<br>'. var_dump((bool) ""); #Falso
echo '<br>'. var_dump((bool) "0"); #Falso
echo '<br>'. var_dump((bool) " "); #Todo o resto é verdadeiro
echo '<br>'. var_dump((bool) "00");
echo '<br>'. var_dump((bool) "false");
echo '<br>'. var_dump((bool) !!!!!!!!!!!!!0);