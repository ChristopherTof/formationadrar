<?php
         // -Créer une variable de type int avec pour valeur 5,
        $nbr1 = 5;

        //-Afficher le contenu de la variable (utilisation de la fonction php echo),
        echo $nbr1.'<br>';

        //-Afficher son type (utilisation de la fonction php gettype),
        echo gettype($nbr1).'<br>';

        //-Créer une variable de type String avec pour valeur votre prénom,
        $name = 'christopher';
        //-Afficher le contenu de la variable (utilisation de la fonction php echo),
        echo 'Le prénom de l\'utilisateur est'.$name.'<br>';

        // -Créer une variable de type booléen avec pour valeur false,
        $bool = false;

        //-Afficher son type (utilisation de la fonction php gettype).
        echo gettype($bool).'<br>';

        $tab = ["Prénom"=>"Christopher", "Nom"=>"Chiarandini"];

        echo "<pre>";
        var_dump($tab) ;
        echo "</pre>";


        //Exercice 2 Concaténation :
//-Créer 1 variable $a qui a pour valeur « bon »,
    $a = "Bon";
//-Créer 1 variable $b qui a pour valeur « jour »,
    $b = "jour";
//-Créer 1 variable $c qui a pour valeur 10,
    $c =10;
//-Concaténer $a, $b et $c +1,
    $concat = $a.$b.$c.+1;
//-Afficher le résultat de la concaténation.
     echo $concat;


//Exercice 3 Concaténation :
//-Créer une variable $a qui a pour valeur $bonjour,
$a = "Bonjour";
//-Afficher un paragraphe (balise html) et à l’intérieur les mots suivants :l’adrar,
echo "<p>l'adrar</p>";
//-Ajouter la variable $a avant la phase dans le paragraphe,
echo "<p>".$a." l'adrar</p>";
//-Cela doit donner :
//<p>bonjour l’Adrar</p>