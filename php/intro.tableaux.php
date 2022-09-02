<?php

    // Est-ce qu'il n'y aurait pas un moyen
    // de ranger toutes ces variables dans un
    // conteneur/une boîte ?

    $nom = "KUHN";
    $prenom = "Yannick";
    $age = 33;
    $taille = 1.78;

    // Tableaux : réponse

    /* comment déclarer un tableau
            grâce aux [ => ouvrir un tableau 
                      ] => fermer un tableau
    */

    // Je déclare un tableau vide

    // Quelle est la spécification d'un tableau ?
    // On va avoir des index (numéros) et des valeurs
    // Le but est d'identifier chaque valeur à une case du tableau

    /*
        Un tableau s'écrit de la façon suivante :
        $tableau = [
            valeur1,        toutes les valeurs sont séparées
            valeur2,        par des virgules
            valeur3 ...
        ]

        Un tableau commence toujours son index avec la valeur 0
    */


    $tableauBiographie = [
        'KUHN',         // une chaine : indice 0
        "Yannick",      // une chaine : indice 1
        33,             // un entier : indice 2
        1.78            // un nombre à virgules : indice 3
    ];

    $length = 4;

    // Valeur de départ : 0
    // Condition d'arrêt : < 4
    // Paramètre 3 / incrémentation de l'indice de boucle avec le pas : indice = indice + 1

    $count = 0;
    while($count < 4){
        echo "Indice $count :" . $tableauBiographie[$count];        
        $count += 1;
    }


    var_dump($tableauBiographie);

    // Lire une valeur du tableau
    // Je vais utiliser par exemple echo de quoi ?
    // echo de la valeur de mon tableau suivi des crochets
    // avec l'indice que je souhaite appelé
    // $tableau[index] me permet de cibler un élément du tableau 

    // ça va me donner la valeur qui se situe à la première case
    // à l'index 0
    var_dump($tableauBiographie[0]);
    var_dump($tableauBiographie[1]);

    // Imaginons que je veuilles parcourir toutes les valeurs
    // de ce tableau
    // sachant que mon tableau est simple et qu'il pourrait potentiellement
    // avoir 100 ou 1000 cases...
    // est-ce que je vais utiliser un appel à chaque case pour afficher toutes les
    // valeurs ?

    // On imagine que non

    // On va devoir utiliser des boucles !


    // $count = 0

    // $count++ Incrémentation
    // c'est équivalent à :
    // $count = $count + 1

    $count = 0;
    $count = $count + 1; // $count <= 1

    // L'incrémentation
    // Ce sont deux façons raccourcies d'écrire la même chose qu'à la ligne 76

    $count += 1;    // $count <= 2      // une première façon de l'écrire différemment

    // Attention : ++ veut toujours dire += 1;
    // Je ne peux pas utiliser ++5

    $count ++;      // $count <= 3      // Une seconde façon de l'écrire différemment

    var_dump($count);

    $tableauBiographie[4] = "truc";
    $tableauBiographie[5] = "ceci";

    // count => qui part de la valeur 10
    $count = 10;

    // Valeur initiale : $count = 10
    // Condition d'arrêt : Il faut que $count soit < 15 pour continuer la boucle
    // Opération pour continuer la boucle : j'incrémente à chaque tour de boucle la valeur de $count

    for($count = 10; $count < 60; $count = $count + 5) {
        echo($count . " ");
    }

    $count = 10;
    while($count < 60){
        $count += 5;
        echo "$count ";
        //$count = $count + 5;
        
    }




