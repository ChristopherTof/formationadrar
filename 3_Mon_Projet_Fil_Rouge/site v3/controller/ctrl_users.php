<?php
    //Connexion à la BDD
    include '../connectBdd.php';
    include '../utils/utilitaire.php';

    // Récupération des donnnées et lancement de la fonction de création de users
    if (isset($_POST['submit_inscrip'])){
        //Verification si les champs sont remplis
        if (!empty($_POST['inscripFirstN']) and !empty($_POST['inscripLastN']) and !empty($_POST['inscripMail']) and !empty($_POST['inscripPseudo']) and !empty($_POST['inscripMdp'] and !empty($_POST['mdp_verif']))){
            // Verifiaction de mot de passe identiques
            if($_POST['inscripMdp'] === $_POST['mdp_verif']){
                // nettoyage des données entrés en email
                $inscripMail = cleanInput($_POST['inscripMail']);
                // Verification de compte inexistant
                if(empty (getUserByEmail($bdd, $inscripMail))){
                    //nettoyage des données
                    $inscripFirstN = cleanInput($_POST['inscripFirstN']);
                    $inscriptLastN = cleanInput($_POST['inscripLastN']);
                    $inscripPseudo = cleanInput($_POST['inscripPseudo']);
                    $mdp = cleanInput($_POST['inscripMdp']);

                    //hash du mot de passe
                    $inscripMdp = password_hash($mdp, PASSWORD_DEFAULT);
                    // Gestion de la photo de profil avec renommage et changement de dossier
                    if($_FILES['img_users']['tmp_name'] != ''){

                        $ext = getFileExtension($_FILES['img_users']['name']);
                        $image_name = uniqid().".".$ext;
                        $image_users = "./public/media/".$image_name;

                        move_uploaded_file($_FILES['img_users']['tmp_name'], $image_users);
                    }
                    //Mise en place d'une photo de profil par default
                    else {
                        $image_users = '../public/media/profil.png';
                    }
                    addUser($inscripFirstN,$inscriptLastN,$inscripMail,$inscripPseudo,$inscripMdp,$image_users, $bdd);
                    //Redirection 
                    header('location:../validateinscription.php');
                }
                // Le compte existe déjà
                else {
                    echo 'Le compte existe déjà';
                }
            } 
            // Si les mdp sont différent
            else { 
                echo 'Les mots de passe ne correspondent pas.';
            }
        } 
        // Si un des champs (ou plusieurs) est vide
        else {
            echo "Veuillez remplir les champs du formulaire";
        }
    }

    //Fonction Création des utilisateur sur la BDD
    function addUser (string $inscripFirstN, string $inscripLastN, string $inscripMail, string $inscripPseudo, string $inscripMdp, string $image_users, $bdd){
        //initialisation de la date 
        try{
            //Preparation de l'insertion des valeurs dans la BDD
            $req = $bdd->prepare("INSERT INTO users(username_users,firstname_users,lastname_users,email_users,password_users,image_users,date_inscription_users,is_moderator) VALUE (?,?,?,?,?,?,?,?)");
            $req->bindParam(1, $inscripPseudo, PDO::PARAM_STR);
            $req->bindParam(2, $inscripFirstN, PDO::PARAM_STR);
            $req->bindParam(3, $inscripLastN, PDO::PARAM_STR);
            $req->bindParam(4, $inscripMail, PDO::PARAM_STR);
            $req->bindParam(5, $inscripMdp, PDO::PARAM_STR);
            $req->bindParam(6, $image_users, PDO::PARAM_STR);
            $req->bindValue(7, date('Y-m-d'), PDO::PARAM_STR);
            $req->bindValue(8, '0', PDO::PARAM_STR);
            //Execution du paramétrage
            $req->execute();
        } catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }
    }

    //Verification de user existant
    function getUserByEmail(PDO $bdd, $inscriptMail){
        try {
            $req = $bdd->prepare ('SELECT id_users,username_users,firstname_users, lastname_users, email_users, password_users, image_users  FROM users WHERE email_users = ?');
            $req->bindParam(1, $inscriptMail, PDO::PARAM_STR);
            $req->execute();
            return $req->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die('Erreur : '.$e->getMessage());
        }
    }
?>
