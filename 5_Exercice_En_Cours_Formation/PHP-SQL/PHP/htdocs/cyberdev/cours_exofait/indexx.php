<?php
echo "<h2 style='color:red'>Exercice 1</h2>";
    // -Créer une variable de type int avec pour valeur 5,
    $nbr1 = 5;
    //-Afficher le contenu de la variable (utilisation de la fonction php echo),
    echo $nbr1.'<br>';
    //-Afficher son type (utilisation de la fonction php gettype),
    echo gettype($nbr1).'<br>';
    //-Créer une variable de type String avec pour valeur votre prénom,
    $name = 'christopher';
    //-Afficher le contenu de la variable (utilisation de la fonction php echo),
    echo 'Le prénom de l\'utilisateur est '.$name.'<br>';
    // -Créer une variable de type booléen avec pour valeur false,
    $bool = false;
    //-Afficher son type (utilisation de la fonction php gettype).
    echo gettype($bool).'<br>';

    $tab = ["Prénom"=>"Christopher", "Nom"=>"Chiarandini"];

    echo "<pre>";
    var_dump($tab) ;
    echo "</pre>";

    echo "<h2 style='color:red'>Exercice 2</h2>";
    //Exercice 2 Concaténation :
//-Créer 1 variable $a qui a pour valeur « bon »,
    $a = "Bon";
//-Créer 1 variable $b qui a pour valeur « jour »,
    $b = "jour";
//-Créer 1 variable $c qui a pour valeur 10,
    $c =10;
//-Concaténer $a, $b et $c +1,
    $concat = $a.$b.$c+1;
//-Afficher le résultat de la concaténation.
     echo $concat;

     echo "<h2 style='color:red'>Exercice 3</h2>";
//Exercice 3 Concaténation :
//-Créer une variable $a qui a pour valeur $bonjour,
    $a = "Bonjour";
//-Afficher un paragraphe (balise html) et à l’intérieur les mots suivants :l’adrar,
    echo "<p>l'adrar</p>";
//-Ajouter la variable $a avant la phase dans le paragraphe,
    echo "<p> $a l'adrar</p>";
//-Cela doit donner :
//<p>bonjour l’Adrar</p>

echo "<h2 style='color:red'>Exercice 4</h2>";
//Exercice 4 Concaténation et opérateur :
//-Créer une variable prix HT (d’un article),
    $prixHT = 4.89;
//-Créer une variable (le nombre d’articles),
    $nbrArticle = 3;
//-Créer une variable  (le taux de TVA), 
    $tva = 5.5;
//-Stocker dans une variable le calul du (total TTC),
    $totalTtc = round($prixHT*($tva/100+1)*$nbrArticle,2);
//-Afficher le prix HT, le nbr d’articles et le taux de TVA (utilisez la fonction echo),
    echo "Le prix HT de l'article est de $prixHT € avec une TVA à  $tva %. Le Client en a pris .$nbrArticle";
//-Afficher le total TTC (utilisez la fonction echo).
    echo "<br>Le prix Total TTC est de : $totalTtc €";

    echo "<h2 style='color:red'>Exercice 5</h2>";
    // Exercice 5 fonction: 
    // -Créer une fonction qui soustrait à $a la variable $b (2 paramètres en entrée),
    function soustrait($a, $b){
        return $a - $b;
    }
    //-la fonction doit renvoyer le résultat de la soustraction $a-$b (return).
    echo '<br>'.soustrait(10,5);
    echo "<h2 style='color:red'>Exercice 6</h2>";
    //Exercice 6 fonction: 
    //-Créer une fonction qui prend en entrée un nombre à virgule (float),
    //la fonction doit renvoyer l’arrondi (return) du nombre en entrée.
    
    function roundedNumber(float $a){
        return round($a,2) ;
    }
    echo '<br>'.roundedNumber(10.13246851);

    echo "<h2 style='color:red'>Exercice 7</h2>";
    //Exercice 7 Fonction  :
    //-Créer une fonction qui prend en entrée 3 valeurs et renvoie la somme des 3 valeurs.
    function add($a, $b, $c){
        return $a+$b+$c;
    }
    echo '<br>'.add(15, 4, 9);

    function add2 (...$liste){
        $somme =0;
        foreach($liste as $value){
            $somme += $value;
        }
        return $somme;
    }
    echo '<br>'.add2(15,25,30);

    echo "<h2 style='color:red'>Exercice 8</h2>";
    //Exercice 8 Fonction :
    //-Créer une fonction qui prend en entrée 3 valeurs et retourne la valeur moyenne des 3 valeurs (saisies en paramètre).
    
    function moyenne($a, $b, $c, $moy){
        return round(($a+$b+$c)/$moy, 2);
    }
    echo '<br>'.moyenne(15, 4, 9,3);


    function moyenne2($a, $b, $c){
        $array = [$a, $b, $c];
        return round(array_sum($array)/count($array), 2);
    }
    echo '<br>'.moyenne2(15, 4, 9,3).'<br>';

    ///////////////////////////////// TYPE DE CONDITION
    ////////IF ELSE
    echo "<h1>Les types de conditions</h1>";
    echo "<h2>IF/ELSE</h2>";
    $nb1 = 10;
    $nb2= -10;
    // test si les 2 chiffres sont positif
    if ($nb1 > 0 AND $nb2 >0){
        echo 'les 2 sont positifs';
    } 
    else if ($nb1 == 0  AND $nb2 ==0){
        echo 'les 2 valent 0';
    }
    else {
        echo ' un des 2 est négatif';
    }

    echo "<h2>TERNAIRE</h2>";
    ///////////EN TERNAIRE
    $resultat = $nb1>0 AND $nb2 > 0 ? 'les 2 sont positif':'Un des 2 est négatif';
    echo "<br> $resultat <br>";

    echo "<h2>SWITCH CASE</h2>";
    ////////// SWITCH CASE
    $nombre = 12;
    switch ($nombre){
        case 10:
            //code 
            echo "Nombre est bien 10";
            break;

        default:
            //code
            echo "C'est autre chose";
            break;
    }

    echo "<h2 style='color:red'>Exercice 9</h2>";
   // Exercice 9 :
    //-Créer une fonction qui prend en entrée 3 valeurs et retourne le nombre le plus petit (echo dans la page web).

    function verif ($nb1, $nb2, $nb3){
        if ($nb1 < $nb2 AND $nb1 < $nb3){
            echo '<br>'.$nb1;
        } else if ($nb2 < $nb3){
            echo '<br>'.$nb2;
        } else {
            echo '<br>'.$nb3;
        }
    }

    verif (15,5,8);
    echo "<h2 style='color:red'>Exercice 10</h2>";
    //Exercice 10 :
    //-Créer une fonction qui prend en entrée 1 valeur (l’âge d’un enfant). Ensuite, elle informe de sa catégorie (echo dans la page web) : 
    //•    "Poussin" de 6 à 7 ans
    //•    "Pupille" de 8 à 9 ans
    //•    "Minime" de 10 à 11 ans
    //•    "Cadet" après 12 ans
    //Bonus : Refaire l’exercice en utilisant le switch case.

    function categorie ($age){
        if ($age >= 6 AND $age<= 7) {
            echo "<br> Poussin";
        } else if ($age >= 8 AND $age <= 9) {
            echo "<br> Pupille ";
        } else if ($age >=  10 AND $age <= 11) {
            echo "<br> Minime ";
        } else {
            echo "<br> Cadet ";
        }
    }
    categorie (12);


   function categorie2($age){
        // switch($age){
        //     case 1:  case 2: case 3:  case 4: case 5 :
        //         echo "<br> Tu  est trop jeune!";
        //         break;

        //     case 6 :  case 7:
        //         echo "<br> Poussin";
        //         break;

        //     case 8 :  case  9 :
        //         echo "<br> Pupille ";
        //         break;
             
        //     case 10 : case 11 : 
        //         echo "<br> Minime ";
        //         break;

        //     default:
        //     echo "<br> Cadet ";
        //     break;
        // }

        switch (true){
            case $age >= 6 AND $age<= 7:
                echo "<br> Poussin";
                break;

            case $age >= 8 AND $age<= 9:
                echo "<br> Pupille";
                break;
            case $age >= 10 AND $age<= 11:
                echo "<br> Minime";
                break;

            case $age >= 12:
                echo "<br> Cadet";
                break;

            default:
            echo "<br> Tu es trop jeune";
            break;    
        
        }
    }

    categorie2(9);
    
    echo '<br><h1>Les boucles</h1>';
    
    /////////////////////////////////////// LES BOUCLES

    $tab = [10,25,45,60,75];
    //Afficher le contenu d'une colonne
    echo '<h2>'.'Affichage d\'un tableau'.'</h2>';
    echo implode('; ',$tab);
    echo '<br>';
    var_dump($tab);

    echo '<pre>';
    var_dump($tab);
    echo '</pre>';
    echo '<br>';

    echo $tab[0];
    echo '<h2>'.'Remplacement d\'une colonne'.'</h2>';
    $tab[1] = 58; // remplace 25 par 58
    echo $tab[1];

    echo '<h2>'.'Création d\'une colonne à la fin du tableau'.'</h2>';
    $tab[]= 65; // creer une nouvelle colonne à la fin (equivalent de push)
    echo '<pre>';
    var_dump($tab);
    echo '</pre>';
    echo '<br>';
    //////tableau indexé
    echo '<h2>'.'Tableau indexé'.'</h2>';
    $tabUser = ["Nom"=>"Chiarandini", "Prenom" => "Christopher"];

    echo '<br>'.$tabUser["Nom"];
    echo '<h2>'.'Création d\'une colonne à la fin du tableau indexé'.'</h2>';
    $tabUser["Age"] = 38; // Ajoute une colonne age



    //Boucle for
    echo '<h2>'.'Boucle for'.'</h2>';

    for($i =0; $i<count($tab); $i++){
        echo $tab[$i].'<br>';
    }

    // Boucle while
    echo '<h2>'.'Boucle While'.'</h2>';
    $i =0;
    while ($i < count($tab)){
        echo $tab[$i].'<br>';
        $i++;
    }

    //boucle foreach
    echo '<h2>'.'Boucle foreach'.'</h2>';
    foreach($tab as $key){
        echo $key."<br>";
    }
    //boucle foreach tableau indexé
    echo '<h2>'.'Boucle foreach tab indexé'.'</h2>';
    foreach($tabUser as $key => $value){
        echo $key."<br>";
    }



    echo "<h1 style='color:red'>Exercice Boucles </h1>";
    /////////EXERCICE TABLEAU BOUCLE
    echo "<h2 style='color:red'>Exercice 11</h2>";
    //Exercice 11 Tableau et boucle :
    //-Créer une fonction qui affiche la valeur la plus grande du tableau.
    function highTab() {
        $temp = 0;
        $tab = [15,85,20,1,74,105];
        for ($i = 0; $i < count($tab); $i++){
           if ($temp < $tab[$i]){
            $temp = $tab[$i];
           }
    }
        echo "L'age le plus grand est : $temp";
    }
    highTab();

    //Exercice 12 Tableau et boucle :
    //-Créer une fonction qui affiche la moyenne du tableau.
    echo "<h2 style='color:red'>Exercice 11</h2>";

    function moyTab(...$tab){
        $somme = 0;
        foreach($tab as $res){
            $somme += $res;            
        }
        $total = $somme/count($tab);

        echo "La moyenne du tableau est de $total";
    }
    moyTab(15,12,18,30);
    
    //Exercice 13 Tableau et boucle : 
    //-Créer une fonction qui affiche la valeur la plus petite du tableau.

    echo "<h2 style='color:red'>Exercice 13</h2>";
    function minTab() {
        $tab = [15,85,20,1,74,105];
        $temp = $tab[0];
        for ($i = 0; $i < count($tab); $i++){
           if ($temp > $tab[$i]){
            $temp = $tab[$i];
           }
    }
        echo "Le nombre le plus petit est : $temp";
    }
    minTab();

    function minTab2(...$tab){
        $i=0;
        $temp =$tab[0];
        while ($i < count($tab)){
            if ($temp > $tab[$i]){
                $temp = $tab[$i];
               }
            $i++;
        }
        echo "<br>Le nombre le plus petit est : $temp";
    }
    minTab2(15,12,11,30);
?>
