<?php
// Exercice 1
    $maChaine = "Aujourd'hui il fait -1000 degrès";
    $maChaine = addslashes($maChaine);
    echo $maChaine . "<br><br>";

// Exercice 2
    $toLower = "ma chaîne en minuscule";
    echo strtoupper($toLower) . "<br><br>";
    echo ucfirst($toLower) . "<br><br>";
    echo ucwords($toLower) . "<br><br>";

    $toUpper = "MA CHAINE EN MAJUSCULE";
    $toUpper = "MA CHAINE EN MAJUSCULE";
    echo strtolower($toUpper) . "<br><br>";
    echo lcfirst($toUpper) . "<br><br>";

// Exercice 3
    $cara25 = "Ma chaîne de caractère qui fais au moins 25 caractères";
    echo "Ma chaîne coutiens :" . str_word_count($cara25) . "Mots" . "<br><br>";

// Exercice 4
    $chaine = "La chaîne de mon choix";

// Exercice 5
    $array = ["Pomme", "Poire", "Abricot", "Cerise", "Tomate"];
    echo implode($array) . "<br><br>";

// Exercice 6
    $chaine1 = "Le texte de mon choix est cool";
    echo strrev($chaine1) . "<br><br>";

// Exercice 7
    $php = "<p>Hello, nous apprenons PHP</p>";
    echo $php;
    echo strip_tags($php) . "<br>";

// Exercice 8
    $monTexte = "Mon plus beau texte pour PHP";
    echo str_pad($monTexte, 500, "<=>",STR_PAD_LEFT) . "<br><br>";

// Exercice 9
    $maVar = "Encore le texte de mon choix";
    $array1 = str_split($maVar);
    foreach ($array1 as $item) {
        echo $item . "<br><br>";
    };

// Exercice 10
    $montext = "J'en ai marre de choisir du texte";
    echo str_replace("texte", "World", $montext) . "<br><br>";

// Exercice 11
    $test = "Ceci est un test";
    $position = strpos($test, "test");
    if ($position === false) {
        echo "Le mot n'as pas été trouvé";
    }
    else {
        echo "Le mot a été trouvé et se situe à la position $position" . "<br><br>";
    }

// Exercice 12
    $chaine2 = "Hello World";
    $search = "Hello";
    $position1 = stripos($chaine2, $search);
    if ($position !== false) {
        echo "Le mot $search est bien en première place" . "<br><br>";
    }

// Exercice 13
    $chaine3 = "Hello World";
    $search1 = "World";
    $position2 = strrpos($chaine3, $search1);
    if ($position2 !== false) {
        echo "Le mot $search1 est bien en dernière position";
    }







