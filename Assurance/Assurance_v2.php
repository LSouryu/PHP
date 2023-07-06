<?php
$a = 0; $b = 0; $c = 0; $age = readline("indiquer votre age : ") . "\n"; $agepermie = readline("depuis combient de temps avez-vous votre permie ? ") . "\n"; $accident = readline("nombre d'accident (si aucun : 0) : ") . "\n"; $client = readline("client depuis combien de temps ? ") . "\n";
if($age < 25) {$a = 0;} else {$a = 1;}
if($agepermie < 2) {$b = 0;} else {$b = 1;}
if($client < 5) {$c = 0;} else {$c = 1;}
if ($a == 1 && $b == 1 && $c ==1 && $accident == 0){ echo "tarif bleu"; } 
else if (($a == 1 && $b == 1 && $c == 0 && $accident == 0) || ($a == 1 && $b == 1 && $c == 1 && $accident == 1) || ($a == 0 && $b == 1 && $c == 1 && $accident == 0) || ($a == 1 && $b == 0 && $c == 1 && $accident == 0)){ echo "tarif vert"; } 
else if (($a == 1 && $b == 1 && $c == 0 && $accident == 1) || ($a == 1 && $b == 1 && $c == 1 && $accident == 2) || ($a == 0 && $b == 1 && $c == 0 && $accident == 0) || ($a == 1 && $b == 0 && $c == 0 && $accident == 0) || ($a == 0 && $b == 1 && $c == 1 && $accident == 1) || ($a == 1 && $b == 0 && $c == 1 && $accident == 1) || ($a == 0 && $b == 0 && $c == 1 && $accident == 0)){ echo "tarif orange"; }
else if (($a == 0 && $b == 0 && $c == 0 && $accident == 0) || ($a == 1 && $b == 0 && $c == 0 && $accident == 1) || ($a == 0 && $b == 1 && $c == 0 && $accident == 1) || ($a == 1 && $b == 1 && $c == 0 && $accident == 2)){ echo "tarif rouge"; } 
else { echo "pas assurée"; }