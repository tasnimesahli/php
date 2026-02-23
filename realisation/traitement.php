<?php
include 'functions.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $date_naissance=$_POST['date_naissance'];
    $filiere=$_POST['filiere'];
    $notes=$_POST['notes'];
    if($nom=="" || $prenom=="" || $date_naissance=="" || $filiere=="" || $notes==""){
        echo "veuillez remplire tous les champ ";
        exit;
    }
           if(verified($notes)===false){      
            echo "slvp verified votre notes!";
            exit;
}



$totalPoint=0;
$coefficients=[
        "Frontend" => 3,
        "Backend" => 4,
        "Entreprenariat" => 2,
        "Anglais" => 1,
        "SoftSkills" => 2
];
$sommecofficient=array_sum($coefficients);

foreach($notes as $matiere=>$allnotes){
$moyenneMatiere=Array_sum($allnotes) / count($allnotes);
$coefficient=$coefficients[$matiere];
$totalPoint +=$moyenneMatiere * $coefficient;
}
 $moyenneCoefficient=$totalPoint / $sommecofficient;
 $moyenneGenerale=MoyenneGenerale($notes);
 $getMention=getMention($moyenneGenerale);
 $decisionFinale=desicionFinale($moyenneGenerale);

 echo "<table border='2'>
 <tr>
    <th>NOM Complete:</th>
    <td>$nom $prenom</td>
 </tr>
 <tr>
    <th>Filiere:</th>
    <td>$filiere</td>
 </tr>
 <tr>
    <th>Date De naissance:</th>
    <td>$date_naissance</td>
 </tr>
</table>
<br>
<table border='2'>
 <tr>
    <th>Matière</th>
    <th>Note 1</th>
    <th>Note 2</th>
    <th>Moyenne</th>
 </tr>";
 foreach($notes as $matiere => $allnotes) {
    $moyMatiere = array_sum($allnotes) / count($allnotes);
    echo "<tr>
            <td>$matiere</td>
            <td>$allnotes[0]</td>
            <td>$allnotes[1]</td>
            <td>$moyMatiere</td>
          </tr>";
 }
echo "</table>";

echo "<br>";
echo "<strong>--- Résultats ---</strong><br>";
echo "Moyenne Pondérée: <b>" . round($moyenneCoefficient, 2) . "</b><br>";
echo "Mention (Bonus): " . getMention($moyenneCoefficient) . "<br>";
echo "Décision (Bonus): " . desicionFinale($moyenneCoefficient) . "<br>";
echo "Moyenne Generale: $moyenneGenerale <br>";
echo "Avec mention $getMention<br>";
echo "Desicion Finale: $decisionFinale";
} 