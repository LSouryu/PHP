<?php
$e = 0;
while($e == 0){
    $nombre = 0;
    $i = 1;
    $imax = 0;
    $cont = 0;
    $perdu = FALSE;
    $m = 0;
    echo "bienvenue dans Custom random !!!" . "\n" . "\n";
    $petit = readline ("choisisser le plus petit : ");
    $grand = readline ("choisisser le plus grand : ");
    $imax = readline ("choisisser votre nombre d'essay max : ");
    $random = rand($petit , $grand);
    echo $random . "\n";
    while ($i <= $imax && $perdu == FALSE) {
        if ($i < $imax){
            if ($nombre != $random){
                $nombre = readline ("choisisser un nombre entre " . $petit . " et " . $grand . " : ");
                if ($nombre >= $petit && $nombre <= $grand){
                    if ($nombre > $random && $i <= $imax && $perdu == FALSE){
                        echo "plus petit" . "\n";
                        $i++;
                    }
                    else if ($nombre < $random && $i <= $imax && $perdu == FALSE){
                        echo "plus grand" . "\n";
                        $i++;
                    } 
                    else if ($nombre == $random) {
                        echo "succès" . "\n";
                        echo "nombre de coup tentés : " . $i . "\n" . "\n";
                        break; 
                    } 
                }
                else {
                    echo "votre nombre est en dehort du random" . "\n";
                }
            }
        }
        else {
            $perdu = !$perdu;
            $nombre = readline ("choisisser un nombre entre " . $petit . " et " . $grand . " : ");
            if ($nombre == $random) {
                echo "succès" . "\n";
                echo"nombre de coup tentés : " . $i . "\n" . "\n";
            } 
            else {
                echo "tu as perdu" . "\n";
                echo "le resultat etait : " . $random . "\n" . "\n";
            }
        }
    }
    echo "Recommencer ou retouner au menu ?" . "\n" . "\n";
    echo "1 : Recommencer" . "\n";
    echo "2 : Menu" . "\n";
    $cont = readline ("choisisser  : ");
    while ($m == 0 ){
        if ($cont > 2 || $cont < 1) {
            echo "Erreur";
            $cont = readline ("choisisser  : ");
        }
        else{
            switch($cont){
                case 1 :
                    break 2;
                case 2 : 
                    echo "retour au menu" . "\n" . "\n";
                    require("+G+P_menu.php");
            }
        } 
    }
}