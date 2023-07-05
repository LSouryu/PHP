<?php

$modejeu = 0;
$a = false;
while($a == false){
    echo "Bienvenue dans le Shifumi " . "\n";
    echo "Veiller choisir votre mode de jeu " . "\n" . "\n";
    echo "1 : 1 Joueur contre l'ordi " . "\n" . "2 : 2 Joueurs " . "\n" . "3 : 3 Joueurs " . "\n" . "4 : Quitter " . "\n" . "\n";
    $modejeu = readline ("choisisser : ");
    switch($modejeu){
        case 1:
            require("Shifumi_jeu1.php");
        case 2:
            require("Shifumi_jeu2.php");
        case 3:
            require("Shifumi_jeu3.php");
        case 4:
            break 2;
        default:
            Echo "\n" . "Impossible" . "\n"  . "\n";
            break;
    }
}