<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="POST">
    <input type="text" name="nbr1" >
    <input type="text" name="operateur" >
    <input type="text" name="nbr2" >

    <select name="liste" id="">
        <option value="1">Valeur 1</option>
        <option value="2">Valeur 2</option>
        <option value="3">Valeur 3</option>
        <option value="4">Valeur 4</option>
        <option value="5">Valeur 5</option>
    </select>

    <input type="checkbox" name="box[]" value="1">
    <input type="checkbox" name="box[]" value="2">
    <input type="checkbox" name="box[]" value="3">
    <input type="checkbox" name="box[]" value="4">
    <input type="checkbox" name="box[]" value="5">

    <button type="submit" name="btn_submit" value="submit">Envoyer</button>

</form> 
</body>
</html>

<?php
    if(isset($_POST["btn_submit"])){
       if (!empty($_POST['nbr1']) AND ($_POST['nbr2'] != "" OR !is_numeric($_POST['nbr2'])) AND !empty($_POST['operateur']) ){
            if (is_numeric($_POST["nbr1"]) AND is_numeric($_POST["nbr2"]) ){
                switch($_POST["operateur"]){
                    case "+" :
                        echo $_POST['nbr1'] + $_POST['nbr2'];
                        break;
    
                    case "-" :
                        echo $_POST['nbr1'] - $_POST['nbr2'];
                        break;
    
                    case "*" :
                        echo $_POST['nbr1'] * $_POST['nbr2'];
                        break;
    
                    case "/" :
                        if ($_POST['nbr2'] == 0){
                            echo "La division est impossible";
                            break;
                        }else {
                            echo $_POST['nbr1'] / $_POST['nbr2'];
                            break;
                        }
    
                    default:
                        echo "L'opération n'est pas faisable";
                        break;
                }
            } else {
                echo "Merci de renseigner des valeurs numériques";
            }
        } else{
            echo "Veuillez remplir les champs svp";
        }

        //echo "LA valeur de la liste est :".$_POST['liste'];
    }
?>

<!-- <?php
    if(isset($_POST["btn_submit"])){
        echo "La valeur de la liste est :".$_POST['liste']."<br>";
       foreach($_POST["box"] as $value){
        echo "La valeur de la box est :".$value."<br>";
       }
    }
?> -->

<!-- Exercice 15 Formulaire :
Partie HTML :
créer une page index.php qui va contenir un formulaire :
-avec la méthode POST
-un input text (name : nbr1),
-un input text (name: nbr2),
-un input text (name: operateur),
-un bouton submit,
Partie PHP :
-tester si le formulaire est submit,
-tester si les champs sont remplis,
-tester la valeur de operateur :
si c'est "+" -> addition des 2 nombres,
si c'est "-" -> soustraction des 2 nombres,
si c'est "/" -> division des 2 nombres,
si c'est "*" -> division des 2 nombres.
-Afficher le résultat de l'opération dans la page. -->

<!-- -Tester si l'opérateur est différent de  "+ - / ou *",
Afficher une erreur l'opération n'existe pas.
-Tester si le 2 éme nombre vaut 0 (division par zero)
Afficher la division par zéro est impossible,  -->

