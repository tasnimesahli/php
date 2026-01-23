<?php
$nom='Alice';
$age=22;
$prix=19.99;
$estConnecte=true;

echo "nom :" .$nom ."<br>";
echo "Age :" .$age ."<br>";
echo "prix:".$prix ."<br>";
echo "connecté :".($estConnecte ?"oui": "non") ."<br>";
var_dump($nom);

$nombre="10";
$nombreInt = (int) $nombre;
echo "conversion:" .$nombreInt;