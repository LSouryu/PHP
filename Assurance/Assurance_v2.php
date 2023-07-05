<?php
$a = false; $b = false; $c = false;
var_dump(!$a);
$age = readline("indiquer votre age : ") . "\n";
$agepermie = readline("depuis combient de temps avez-vous votre permie ? ") . "\n";
$accident = readline("nombre d'accident (si aucun : 0) : ") . "\n";
$client = readline("client depuis combien de temps ? ") . "\n";
if($age < 25) {$a == false;} else {$a == true;}
if($agepermie < 2) {$b == false;} else {$b == true;}
if($client < 5) {$c == false;} else {$c == true;}
if ($a == true && $b == true && $c ==true && $accident == 0){
    echo "tarif bleu";
} else if (($a == true && $b == true && $c && $accident == 0) || ($a == true && $b == true && $c == true && $accident == 1) || ($a && $b == true && $c == true && $accident == 0) || ($a == true && $b && $c == true && $accident == 0)){
    echo "tarif vert";
} else if (($a == true && $b == true && $c && $accident == 1) || ($a == true && $b == true && $c == true && $accident == 2) || ($a && $b == true && $c && $accident == 0) || ($a == true && $b && $c && $accident == 0) || ($a && $b == true && $c == true && $accident == 1) || ($a == true && $b && $c == true && $accident == 1) || ($a && $b && $c == true && $accident == 0)){
    echo "tarif orange";
}else if (($a && $b && $c && $accident == 0) || ($a == true && $b && $c && $accident == 1) || ($a && $b == true && $c && $accident == 1) || ($a == true && $b == true && $c && $accident == 2)){
    echo "tarif rouge";
} else {
    echo "pas assurée";
}