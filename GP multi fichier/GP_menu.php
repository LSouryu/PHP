<?php

$choix = 0;
$l = 0;
while($l == 0){
    echo "merci de choisir votre mode de jeu : " . "\n" . "\n";
    echo "1 : Mega random (1 à 1 000 000 , pas d'essay max)" . "\n";
    echo "2 : Custom random ( choisisser votre min / max / essay max)" . "\n";
    echo "3 : Quitter" . "\n";
    $choix = readline ("votre choix : ");
    switch($choix){
        case 1 :
            require("GP_Jeu1.php");
        case 2 :
            require("GP_Jeu2.php");
        case 3 :
            exit("bonne journée");
        default;
            echo "Erreur : 1 2 ou 3" . "\n";
    }
}