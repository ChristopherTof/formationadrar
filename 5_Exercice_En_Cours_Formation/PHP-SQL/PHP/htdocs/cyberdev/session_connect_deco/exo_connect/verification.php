<?php
include('../connexBdd.php');

if (isset($_POST['submit'])) {
    //tester si champs remplis
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = cleanInput($_POST['email']);
        //récupérer le compte
        $recup = getUserByMail($bdd, $email);
        //test si le compte existe
        if (!empty($recup)) {
            $password = cleanInput($_POST['password']);
            //tester si le mdp correspond
            if (password_verify($password, $recup["passwrd"])) {
                session_start();
                //Creer une session
                $_SESSION['nom'] = $recup['nom'];
                $_SESSION['prenom'] = $recup['prenom'];
                $_SESSION['activated'] = true;

                header('location:./connexion.php?error=1');
            } else {
                //si le mdp ne correspond pas 
                header('location:./connexion.php?error=2');
            }
        }
    } else {
        // si les champs ne sont pas remplis
        header('location:./connexion.php?error=3');
    }
}

function getUserByMail($bdd, $email)
{
    try {
        $requete = $bdd->prepare('SELECT id,nom,prenom,email,passwrd FROM utilisateur WHERE email = ?');
        $requete->bindParam(1, $email, PDO::PARAM_STR);
        $requete->execute();
        $data = $requete->fetch(PDO::FETCH_ASSOC);
        return $data;
    } catch (Exception $e) {
        die('Error : ' . $e->getMessage());
    }
}

function cleanInput(string $value): string
{
    return htmlspecialchars(strip_tags(trim($value)), ENT_NOQUOTES);
}
