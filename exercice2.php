<?php

require "fonction.php";

// EXERCICE 2. Mes explications de l'exercice seront en commentaire.

while (true) {
    echo "CALCULATRICE \n";

    while (true) { // Je met en place une condition. 
        $nombre1 = readline("Entrez le premier nombre : ");
        if (is_numeric($nombre1)) { 
            $nombre1 = (float)$nombre1; // Je convertis en float pour accepter les nombres décimaux
            break;
        } else { 
            echo "Veuillez entrer un nombre valide.\n";
        }
    }

    while (true) {
        $nombre2 = readline("Entrez le deuxième nombre : ");
        if (is_numeric($nombre2)) {
            $nombre2 = (float)$nombre2;
            break;
        } else {
            echo "Veuillez entrer un nombre valide.\n";
        }
    }
    
    break; // Si le nombre 1 et 2 sont valides, on sort de la boucle et le menu s'affiche.
}


while (true){
    echo "1: Addition\n";
    echo "2: Soustraction\n";
    echo "3: Multiplication\n";
    echo "4: Division\n";
    $operation = readline("Entrez le numéro de l'opération que vous voulez effectuer : ");
    if (in_array($operation, [1, 2, 3, 4])) {
        switch ($operation) {
            case 1:
                $result = Addition($nombre1, $nombre2);
                $operationName = "Addition";
                break;
            case 2:
                $result = Soustraction($nombre1, $nombre2);
                $operationName = "Soustraction";
                break;
            case 3:
                $result = Multiplication($nombre1, $nombre2);
                $operationName = "Multiplication";
                break;
            case 4:
                $result = Division($nombre1, $nombre2);
                $operationName = "Division";
                break;
        }
        echo "Résultat de l'opération ($operationName) : $result\n";
        break;
    } else {
        echo "Entrez une réponse valide.\n";
    }
}

// $continue = readline("Voulez-vous effectuer une autre opération ? (o/n) : ");
// if (strtolower($continue) != 'o') {
    
// }   else{
//         echo "Au revoir !";
//         exit;
//     }

