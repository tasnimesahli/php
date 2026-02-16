<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nom = $_POST['nom'];
    $note1=$_POST['note1']; 
    $note2=$_POST['note2']; 
    $note3=$_POST['note3']; 
    $mesNotes=[$note1, $note2, $note3];
    foreach($mesNotes as $note){
        if($note>20 || $note <0){
            echo "erreur";
            exit;
        }
    }

   function calculerMoyenne($mesNotes){
    $moyenne=array_sum($mesNotes) / count($mesNotes);
    return $moyenne;
   }

 function getMention($moyenne){
    if($moyenne >=16){
        return "tres bien continu";
    } else if($moyenne >=14){
        return "bien continu";
    } else if($moyenne>=12){
        return "Assez bien ";
    } else if($moyenne >=10){
        return "Passable fait attentient";
    } else{
        return "Ajourne";
    }
 }
 $moyenne=calculerMoyenne($mesNotes);
 $mention=getMention($moyenne);
 echo "Bonjour ".ucfirst($nom) ."<br>";
 echo "Votre note :  " .round($moyenne,2)."/20" ;
 echo " Avec mention  ".$mention;

}else{
    echo "erreur";
}