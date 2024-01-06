<?php
//importer la base de données
include '../connexBdd.php';

if (isset($_POST["submit"])) {
    //tester si les champs sont bien remplis
    if (
        !empty($_POST["nom"]) and !empty($_POST["prenom"]) and !empty($_POST["mail"])
        and !empty($_POST["password_utilisateur"]) and !empty($_POST["password_verification"])
    ) {
        //tester si les 2 passwords sont identiques
        if ($_POST["password_utilisateur"] === $_POST["password_verification"]) {
            //nettoyer le mail 
            $email = cleanInput($_POST["mail"]);
            //tester si le compte n'existe pas
            if (empty(getUserByMail($bdd, $email))) {
                //nettoyer les entrèes utilisateur
                $nom = cleanInput($_POST["nom"]);
                $prenom = cleanInput($_POST["prenom"]);
                $password = cleanInput($_POST["password_utilisateur"]);
                //hasher le mot de passe
                $hash = password_hash($password, PASSWORD_DEFAULT);
                //ajouter le compte en BDD
                addUser($bdd, $nom, $prenom, $email, $hash);
                //afficher un message le compte à été ajouté
                header('location:./ok.php'); //version redirection
                // echo 'nscription OK' -> Version affichage dans register
            }
            //tester si le compte existe déja
            else {
                //Afficher un message erreur
                header('location:./index.php?error=2'); //version redirection
                // echo 'le compte existe déjà' -> Version affichage dans register
            }
        }
        //les mots de passe sont différents
        else {
            //Afficher un message d'erreur
            header('location:./index.php?error=3'); //version redirection
            // echo 'Mot de passe différents' -> Version affichage dans register
        }
    }
} else {
    header('location:./index.php?error=1'); //version redirection
    // echo 'Les champs sont vides' -> Version affichage dans register
}

function getUserByMail($bdd, $email)
{
    try {
        $requete = $bdd->prepare('SELECT id FROM utilisateur WHERE email = ?');
        $requete->bindParam(1, $email, PDO::PARAM_STR);
        $requete->execute();
        $data = $requete->fetch(PDO::FETCH_ASSOC);
        return $data;
    } catch (Exception $e) {
        die('Error : ' . $e->getMessage());
    }
}
function addUser($bdd, $nom, $prenom, $email, $password)
{
    try {
        $requete = $bdd->prepare('INSERT INTO utilisateur(nom,prenom,email,passwrd) VALUE(?,?,?,?)');
        $requete->bindParam(1, $nom, PDO::PARAM_STR);
        $requete->bindParam(2, $prenom, PDO::PARAM_STR);
        $requete->bindParam(3, $email, PDO::PARAM_STR);
        $requete->bindParam(4, $password, PDO::PARAM_STR);
        $requete->execute();
    } catch (Exception $e) {
        die('Error : ' . $e->getMessage());
    }
}
function cleanInput(string $value): string
{
    return htmlspecialchars(strip_tags(trim($value)), ENT_NOQUOTES);
}
