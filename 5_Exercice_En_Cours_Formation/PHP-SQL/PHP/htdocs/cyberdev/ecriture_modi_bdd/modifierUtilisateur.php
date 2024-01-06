<?php
//Récupérer le paramètres GET id
include './connexBdd.php';

if (isset($_GET["id"]) and !empty($_GET["id"])) {
    $user = getUtilisateurById($bdd, $_GET["id"]);



    // test si user est vide
    if (!$user) {
        // si l'id user n'exite pas, renvoie ver la page index : 
        header("Location:./index.php");
    } else {
        //Test le bouton submit
        if (isset($_POST["btn_submit"])) {
            //Tester si les champs sont bien remplis
            if (!empty($_POST["nom"]) and !empty($_POST["prenom"]) and !empty($_POST["email"])) {
                //3Appel de la fonction qui met  jour l'utilisateur dans la BDD
                updateUser($bdd, $_POST["nom"], $_POST["prenom"], $_POST["email"], $_GET["id"]);
                //Redirection vers la page d'index
                header("Location:./index.php?valid");
            }
        }
    }
}

// Function qui récupères les anciennes valeur du compte utilisateur

function getUtilisateurById($bdd, $id)
{
    try {
        $req = $bdd->prepare("SELECT nom,prenom,email FROM utilisateur WHERE id = ?");
        $req->bindParam(1, $id, PDO::PARAM_INT);
        $req->execute();
        $data = $req->fetch(PDO::FETCH_ASSOC);
        return $data;
    } catch (Exception $e) {
        die("Error : " . $e->getMessage());
    }
}

// 5 fonction qui met a jour l'utilisateur
//update utilisateur set nom = valeur, prenom = valeur, email = valeur

function updateUser($bdd, $nom, $prenom, $email, $id)
{
    try {
        $req = $bdd->prepare("UPDATE utilisateur set nom=?,prenom=?,email=? WHERE id=?");
        $req->bindParam(1, $nom, PDO::PARAM_STR);
        $req->bindParam(2, $prenom, PDO::PARAM_STR);
        $req->bindParam(3, $email, PDO::PARAM_STR);
        $req->bindParam(4, $id, PDO::PARAM_INT);
        $req->execute();
    } catch (Exception $e) {
        die("Error : " . $e->getMessage());
    }
}


?>

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
            <input type="text" name="nom" value="<?= $user['nom'] ?>">
        </p>
        <p>
            <label for="prenom">Votre prénom :</label>
            <input type="text" name="prenom" value="<?= $user['prenom'] ?>">
        </p>
        <p>
            <label for="email">Votre email :</label>
            <input type="mail" name="email" value="<?= $user['email'] ?>">
        </p>

        <p><input type="submit" value="Modifier" name="btn_submit"></p>
        <!--<p><input type="submit" value="Afficher" name="get_submit"></p>-->
    </form>

</body>

</html>