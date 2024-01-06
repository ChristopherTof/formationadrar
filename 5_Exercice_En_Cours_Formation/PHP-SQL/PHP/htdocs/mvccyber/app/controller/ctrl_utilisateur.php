<?php

function addUtilisateur($bdd)
{
    //Initialisation message d'erreur
    $message = "";
    //Check si le bouton est cliqueé
    if (isset($_POST["submit"])) {
        //Verification des champs vide
        if (!empty($_POST["nom_utilisateur"]) && !empty($_POST["prenom_utilisateur"]) && !empty($_POST["email_utilisateur"]) && !empty($_POST["password_utilisateur"]) && !empty($_POST["password_verify"])) {
            if ($_POST['password_utilisateur'] === $_POST['password_verify']) {
                // clean du mail pour check compte existant
                $email = cleanInput($_POST['email_utilisateur']);
                //Check si le compte n'existe pas 
                if (empty(getUtilisateurByMail($bdd, $email))) {
                    //netoyage des inputs
                    $nom = cleanInput($_POST['nom_utilisateur']);
                    $prenom = cleanInput($_POST['prenom_utilisateur']);
                    $password = cleanInput($_POST['password_utilisateur']);
                    //hash du mot de pass
                    $hash = password_hash($password, PASSWORD_DEFAULT);
                    //test si image a bien été importer
                    if ($_FILES['url_image']['tmp_name'] != '') {
                        $url_image = "./public/media/" . $nom . "_" . $prenom . "_" . $_FILES['url_image']['name'];

                        move_uploaded_file($_FILES['url_image']['tmp_name'], $url_image);
                    }
                    // test si il n'y a pas d'image
                    else {
                        $url_image = '/public/media/image.png';
                    }
                    //Role par defaut à Stagiaire
                    $id_roles = 1;
                    //Ajout en BDD
                    insertUtilisateur($bdd, $nom, $prenom, $email, $hash, $url_image, $id_roles);
                    $message = 'Le compte a bien été ajouté à la base de donnée';
                } else {
                    $message = "Compte déjà existant";
                }
            } else {
                $message = "Le mot de passe ne sont pas identiques";
            }
        } else {
            $message = 'Merci de remplir tous les champs';
        }
    }
    //Ajout du vue à la fonction
    include './app/vue/vue_add_utilisateur.php';
}
