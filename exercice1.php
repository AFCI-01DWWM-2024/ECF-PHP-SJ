<?php

require "fonction.php";

// EXERCICE 1. Mes explications de l'exercice seront en commentaire.


while (true) {
    echo "CALCUL SUR LE CERCLE \n";

    $pi = 3.14;   // sur internet, il est noté que PI est égal à 3.14 //
    $rayon = readline("Entrez le rayon du cercle : ");
    $rayon = floatval($rayon); // permet de convertir ma chaine de caractère en nombre //

    $circonference = 2 * $pi * $rayon;
    echo "Circonférence du cercle : " . $circonference . "\n";

    $surface = $pi * ($rayon * $rayon);
    echo "La surface du cercle est : " . $surface . "\n";

    while (true) { 
        $calcul = readline("Voulez-vous faire un autre calcul? (O/N) : ");
        if ($calcul === 'o') { //si la reponse à la question est 'o' alors je reviens au debut. //
            break;  
        } elseif ($calcul === 'n') { //si la reponse à la question est 'n' alors il sera affiché au revoir à bientôt et ça s'arrête là //
            echo "Au revoir, à bientôt!\n";
            exit;  
        } else { //si la reponse à la question n'est ni o ou n alors la question se repose jusqu'a temps qu'il y'ai 'o' ou 'n' en reponse à la question. //
            echo "Entrez une réponse valide.\n";
        }
    }
}







?>
