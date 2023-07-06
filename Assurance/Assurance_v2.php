<?php
$a = false; $b = false; $c = false;
$age = readline("indiquer votre age : ") . "\n";
$agepermie = readline("depuis combient de temps avez-vous votre permie ? ") . "\n";
$accident = readline("nombre d'accident (si aucun : 0) : ") . "\n";
$client = readline("client depuis combien de temps ? ") . "\n";
if($age < 25) {$a = false;} else {$a = true;}
if($agepermie < 2) {$b = false;} else {$b = true;}
if($client < 5) {$c = false;} else {$c = true;}
if ($a == true && $b == true && $c ==true && $accident == 0){
    echo "tarif bleu";
} else if (($a == true && $b == true && $c == false && $accident == 0) || ($a == true && $b == true && $c == true && $accident == 1) || ($a == false && $b == true && $c == true && $accident == 0) || ($a == true && $b == false && $c == true && $accident == 0)){
    echo "tarif vert";
} else if (($a == true && $b == true && $c == false && $accident == 1) || ($a == true && $b == true && $c == true && $accident == 2) || ($a == false && $b == true && $c == false && $accident == 0) || ($a == true && $b == false && $c == false && $accident == 0) || ($a == false && $b == true && $c == true && $accident == 1) || ($a == true && $b == false && $c == true && $accident == 1) || ($a == false && $b == false && $c == true && $accident == 0)){
    echo "tarif orange";
}else if (($a == false && $b == false && $c == false && $accident == 0) || ($a == true && $b == false && $c == false && $accident == 1) || ($a == false && $b == true && $c == false && $accident == 1) || ($a == true && $b == true && $c == false && $accident == 2)){
    echo "tarif rouge";
} else {
    echo "pas assurée";
}