<div class="titulo">Break / Continue</div>

<?php
$count = 15;
for(;;){
    echo "$count <br>";
    $count++;
    if($count > 20){
        break;
    }
}

echo "<hr>";

for(;;){
    $count++;

    if($count % 2 === 1){
        continue;
    }
    echo "$count <br>";
   if($count >= 30){
       break;
   }
}

echo "FIM!";

?>


