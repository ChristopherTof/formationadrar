<?php

include "../connectBdd.php";
include "../controller/ctrl_users.php";

//test si le submit est cliqué

if (isset($_POST["submit"])){
    //Vérification de champs remplis
    if(!empty($_POST["logMail"]) && $_POST["logMdp"]){
        //Nettoyage de l'entrée du champs mail.
        $logMail = cleanInput($_POST["logMail"]);
        //Vérification de la présence du mail en BDD
        if(!empty(getUserByEmail($bdd, $logMail))){
            // Netoyage du MDP entrant
            $logMdp = cleanInput($_POST["logMdp"]);
            $user = getUserByEmail($bdd, $logMail);
            $mdp = $user["password_users"];
            //Vérification du mot de passe
            if(password_verify($logMdp, $mdp)){
                session_start();
                $_SESSION["connected"] = true;
                $_SESSION["username"] = $user["username_users"];
                $_SESSION["firstname"] = $user["firstname_users"];
                $_SESSION["lastname"] = $user["lastname_users"];
                $_SESSION["email"] = $user["email_users"];
                $_SESSION["image"] = $user["image_users"];
                echo "all is good ".$user["username_users"];

                
            }
            //si le mdp n'est pas bon
            else {
                echo "Mail et/ou Mot de passe invalide(s)";
            }
        }
        // si L'adresse mail n'est pas enregistrer dans la base de données
        else {
            echo "Mail et/ou Mot de passe invalide(s)";
        }
    }
    //si les champs ne sont pas remplis
    else {
        echo "Veuillez remplir les champs. Merci.";
    }
}
?>