<?php
$age = 0; $agepermie = 0; $accident = 0; $client = 0;
$age = readline("indiquer votre age : ") . "\n";
$agepermie = readline("depuis combient de temps avez-vous votre permie ? ") . "\n";
$accident = readline("nombre d'accident (si aucun : 0) : ") . "\n";
$client = readline("client depuis combien de temps ? ") . "\n";
if($client < 5){
    if($age < 25 && $agepermie <= 2){
        switch ($accident) {
            case 0 : echo"vous avez droit au tarif rouge"; break;
            default: echo "vous n'etes pas assurée"; break;
        }
    } else if(($age < 25 && $agepermie > 2) || ($age >= 25 && $agepermie <= 2)){
        switch ($accident) {
            case 0 : echo"vous avez droit au tarif orange"; break;
            case 1 : echo"vous avez droit au tarif rouge"; break;
            default: echo "vous n'etes pas assurée"; break;
        }
    } else if($age >= 25 && $agepermie > 2){
        switch ($accident) {
            case 0 : echo"vous avez droit au tarif vert"; break;
            case 1 : echo"vous avez droit au tarif orange"; break;
            case 2 : echo"vous avez droit au tarif rouge"; break;
            default: echo "vous n'etes pas assurée";  break;
        }
    }
} else {
    if($age < 25 && $agepermie <= 2){
        switch ($accident) {
            case 0 : echo"vous avez droit au tarif orange"; break;
            default: echo "vous n'etes pas assurée"; break;
        }
    } else if(($age < 25 && $agepermie > 2) || ($age > 25 && $agepermie <= 2)){
        switch ($accident) {
            case 0 : echo"vous avez droit au tarif vert"; break;
            case 1 : echo"vous avez droit au tarif orange"; break;
            default: echo "vous n'etes pas assurée"; break;
        }
    } else if($age > 25 && $agepermie > 2){
        switch ($accident) {
            case 0 : echo"vous avez droit au tarif bleu"; break;
            case 1 : echo"vous avez droit au tarif vert"; break;
            case 2 : echo"vous avez droit au tarif orange"; break;
            default: echo "vous n'etes pas assurée"; break;
        }
    }
}