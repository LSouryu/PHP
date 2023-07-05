<?php

echo "Bienvenue dans le mode 1 vs bot" . "\n" . "\n";
$b = false;
while($b == false){
    $jeu1_choix_joueur = 0;
    $jeu1_choix_ordi = 0;
    echo "Choisisser : " . "\n" . "1 : Pierre" . "\n" . "2 : Feuille" . "\n" . "3 : Ciseau" . "\n";
    $jeu1_choix_joueur = readline ("" . "\n");
    $jeu1_choix_ordi = rand(1 , 3);
}