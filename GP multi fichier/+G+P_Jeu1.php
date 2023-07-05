<?php


$d = 0;
while($d == 0){
    $nombre = 0;
    $i = 1;
    $p = 0;
    $random = rand(1 , 1000000);
    $continue = 0;
    echo "bienvenue dans Mega random !!!" . "\n" . "\n";
    echo $random . "\n";
    while($nombre != $random){
        $nombre = readline ("choisisser un nombre entre 1  et 1000000 : ");
        if($nombre > 1000000 || $nombre < 1){
            echo "nombre hors random" . "\n";
        }
        else{
            if ($nombre > $random){
                echo "plus petit" . "\n";
                $i++;
            }
            else if ($nombre < $random){
                echo "plus grand" . "\n";
                $i++;
            } 
            else if ($nombre == $random) {
                echo "succès" . "\n";
                echo "nombre de coup tentés : " . $i . "\n" . "\n";
                echo "Recommencer ou retouner au menu ?" . "\n" . "\n";
                echo "1 : Menu" . "\n";
                echo "2 : Recommencer" . "\n";
                $continue = readline ("choisisser  : ");
                while ($p == 0 ){
                    if ($continue > 2 || $continue < 1) {
                        echo "Erreur";
                        $continue = readline ("choisisser  : ");
                    }
                    else{
                        switch($continue){
                            case 1 :
                                echo "retour au menu" . "\n" . "\n";
                                require("+G+P_menu.php");
                            case 2 :
                                break 2;
                        }
                    } 
                }
            }
        }
    }
}