<?php
for ($i =1; $i <=10; $i++){
    echo "Nombre : $i <br>";
}

$j =1;
while ($j <= 5){
    echo "Itération : $j <br>";
    $j++;
}
$animaux =["chat", "chien", "lapin"];
foreach ($animaux as $animal){
    echo "animal: $animal <br>";
}
for($i=1; $i <= 10; $i++){
    if ($i ==5) continue;
    if($i ==8) break;
    echo "valeur : $i <br>";
}