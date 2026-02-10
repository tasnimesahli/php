<?php
$animaux = ["chat", "chien", "lapin"];
echo "premier animal:".$animaux[0] ."<br>";
foreach($animaux as $animal){
    echo "Animal : $animal <br>";
}
$voiture = [
    "marque" => "toyota",
    "modele" => "corolla",
    "annee" => 2020
];
echo "modele:" .$voiture["modele"] . "<br>";

$fruits = ["Pomme", "Banane"];
array_push($fruits, "Mangue");
unset($fruits[1]); 
echo "Nombre de fruits : " . count($fruits);
