<!-- Exercice 14 Formulaire : -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<!-- // partie HTML :
// créer une page index.php qui va contenir un formulaire :
// -avec la méthode POST
// -un input text (name : nbr1),
// -un input text (name: nbr2),
// -un bouton submit, -->

<form action="" method="POST">
    <input type="text" name="nbr1" >
    <input type="text" name="nbr2" >

    <button type="submit" name="btn_submit" value="submit">Envoyer</button>

</form>
</body>
</html>

<?php 


// partie PHP :
// -tester si le formulaire est submit,
// -Tester si les champs nbr1 et nbr2 sont remplis,
// -additionner les 2 nombres,
// -Afficher le résultat de l'opération sous la forme :
// L'addition des 2 valeurs est égale : résultat 

if(isset($_POST["btn_submit"])){
    if (!empty($_POST["nbr1"]) AND !empty($_POST["nbr2"])){    
        $total = $_POST['nbr1'] + $_POST["nbr2"];
        echo "L'addittion des 2 valeurs est égale : $total";
    }else{
        echo "Merci de renseigner les champs";
    }
}
?>