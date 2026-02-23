<?php
function verified($notes){
    foreach($notes as $matiere => $allnotes){
        foreach($allnotes as $note)
    if(!is_numeric($note) || $note>20 || $note<0){
        return false;
    }}
    return true;
}
function MoyenneGenerale($notes){
$totale=[];
    foreach($notes as $matiere=>$allnotes ){
      $sum= array_sum($allnotes)/count($allnotes);
    $totale[$matiere]=$sum;
    }
    $moyennegenrale=array_sum($totale)/count($totale);
    return $moyennegenrale;
}
function getMention($moyennegenerale){
    if($moyennegenerale >=16)return "Trés Bien";//16,17,18,19,20//
    elseif($moyennegenerale>=14) return "Bien";//14,15//
    elseif($moyennegenerale>=12) return "Assez Bien"; //12,13//
    elseif($moyennegenerale>=10) return "Passable"; //10,11//
    else return "La note est insuffisant"; //-9,21,etc.....//
}
function desicionFinale($moyennegenerale){
    if($moyennegenerale>=10) return "Admis"; //10,11,12,13,14,15,16,17,18,19,20
    elseif($moyennegenerale<10) return "Ajournee";  //-9,21,ETC....//
    else return "Erreur:Il ya une probleme du note!!!";
}
?>