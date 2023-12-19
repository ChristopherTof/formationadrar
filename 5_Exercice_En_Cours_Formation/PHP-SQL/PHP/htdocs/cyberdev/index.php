<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <p>
            <label for="nom">Votre nom :</label>
            <input type="text" name="nom">
        </p>
        <p>
            <label for="nom">Votre prénom :</label>
            <input type="text" name="nom">
        </p>
        <p>
            <label for="nom">Votre email :</label>
            <input type="text" name="nom">
        </p>
        <p>
            <label for="nom">Votre mot de passe :</label>
            <input type="text" name="nom">
        </p>

        <input type="submit" value="Envoyer" name="btn_submit">
    </form>
</body>

<?php
include './connexBdd.php';
?>

</html>




<!-- exercice 17 SQL :
-Partie SQL : 
Créer une base de données qui va contenir :
-une table utilisateur (nom, prenom, email, password)


-Partie PHP :
-Créer une fonction qui va ajouter un utilisateur en BDD (insert)
-Vérifier si le formulaire est submit,
-Tester si les 4 champs sont bien remplis,
-Si les champs ne sont pas tous remplis afficher -> "veuillez remplir les champs du formulaire"
-Appeler la fonction qui fait la requête SQL (insert)
-Afficher un message pour indiquer que l'utilisateur est enregistré en BDD


-Partie HTML :
Un formulaire qui va contenir les éléments suivants :
-Un input text (nom),
-Un input text (prenom),
-Un input email (email),
-Un input password (password),
-Un input submit (submit). -->