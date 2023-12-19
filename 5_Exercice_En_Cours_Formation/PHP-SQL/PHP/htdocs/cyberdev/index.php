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
            <label for="prenom">Votre prénom :</label>
            <input type="text" name="prenom">
        </p>
        <p>
            <label for="email">Votre email :</label>
            <input type="text" name="email">
        </p>
        <p>
            <label for="passwrd">Votre mot de passe :</label>
            <input type="password" name="passwrd">
        </p>

        <input type="submit" value="Envoyer" name="btn_submit">
    </form>
</body>

<?php
include './connexBdd.php';

if(isset($_POST['btn_submit'])){
    if (!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['email']) AND !empty($_POST['passwrd'])){
      addUser ($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['passwrd'], $bdd);
      echo "<p><strong>L'enregistrement a bien été pris en compte.</strong></p>";
    } else {
        echo "Veuillez remplir les champs du formulaire";
    }
} else {
    "Le bouton ne fonctionne pas";
}

// Création des utilisateur en BDD 
function addUser (string $nom, string $prenom, string $email, string $passwrd, $bdd){
    $passH = md5($passwrd, false);

    $req = $bdd->prepare ("INSERT INTO utilisateur(nom,prenom,email,passwrd) VALUE (?,?,?,?)");
    $req->bindParam(1, $nom, PDO::PARAM_STR);
    $req->bindParam(2, $prenom, PDO::PARAM_STR);
    $req->bindParam(3,$email, PDO::PARAM_STR);
    $req->bindParam(4,$passH, PDO::PARAM_STR);
    $req->execute();
}
?>

</html>

<!-- exercice 17 SQL :
-Partie SQL :   OK
Créer une base de données qui va contenir :
-une table utilisateur (nom, prenom, email, password)


-Partie PHP :
-Vérifier si le formulaire est submit, OK
-Tester si les 4 champs sont bien remplis, OK
-Si les champs ne sont pas tous remplis afficher -> "veuillez remplir les champs du formulaire" OK

-Créer une fonction qui va ajouter un utilisateur en BDD (insert) OK
-Appeler la fonction qui fait la requête SQL (insert) OK
-Afficher un message pour indiquer que l'utilisateur est enregistré en BDD ok


-Partie HTML :   OK
Un formulaire qui va contenir les éléments suivants :
-Un input text (nom),
-Un input text (prenom),
-Un input email (email),
-Un input password (password),
-Un input submit (submit). -->

<!-- Bonus :
hasher le password en utisant la méthode md5,
Enregistrer le mot de passe hashé (pas la version en clair du formulaire).
https://www.php.net/manual/fr/function.md5  -->