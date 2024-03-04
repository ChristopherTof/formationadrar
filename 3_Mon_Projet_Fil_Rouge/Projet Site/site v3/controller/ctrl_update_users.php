<?php
session_start();
    //Connexion à la BDD
    include '../connectBdd.php';
    include '../utils/utilitaire.php';
    include 'ctrl_get_users.php';

echo "pouet". $_SESSION["id"];
    
//modification de la base de donnée
    if (isset($_POST["btn_submit"])){
        if(isset($_SESSION["id"])){
            $id = $_SESSION["id"];
            $user = getUtilisateurById($bdd, $id);
            //Verification des champs remplis
            if(!empty($_POST["email"]) && $_POST["firstname"] && $_POST["lastname"]){
                // nettoyage des champs
                $new_username=cleanInput($_POST["username"]);
                $new_email=cleanInput($_POST["email"]);
                $new_firstname=cleanInput($_POST["firstname"]);
                $new_lastname=cleanInput($_POST["lastname"]);
                //recup de l'ancien mail
                $oldMail = $user["email_users"];
                updateUsers($bdd, $id, $new_username, $new_email, $new_firstname, $new_lastname);
                if ($new_email !== $oldMail){
                    session_destroy();
                    unset($_COOKIE['PHPSESSID']);
                } 
                else {
                    $_SESSION["username"] = $_POST["username"];
                    $_SESSION["firstname"] = $_POST["firstname"];
                    $_SESSION["lastname"] = $_POST["lastname"];
                    $_SESSION["email"] = $_POST["email"];
                }
                header("Refresh:0;url=../profil.php");
            }else{
                echo "Veuillez remplir les champs.";
            }
        }else {
            header("Location:./index.php");
        }
    }
   


    

    function updateUsers ($bdd,$id, $new_username,$new_email, $new_firstname, $new_lastname, ){
        try {
           //lancement de la requete SQL
        $req = $bdd->prepare("UPDATE users set 
        username_users=?, 
        firstname_users=?,
        lastname_users=?,
        email_users=?
        WHERE id_users = ?");
        $req->bindParam(1, $new_username, PDO::PARAM_STR);
        $req->bindParam(2, $new_firstname, PDO::PARAM_STR);
        $req->bindParam(3,$new_lastname,PDO::PARAM_STR);
        $req->bindParam(4,$new_email,PDO::PARAM_STR);
        $req->bindParam(5,$id, PDO::PARAM_INT);
        $req->execute();
        } catch (Exception $e) {
            die("Error : ". $e->getMessage());
        }
    }

    function updatePictUsers ($bdd,$new_pict, $id){
        try {
           //lancement de la requete SQL
        $req = $bdd->prepare("UPDATE users set 
        image_users
        WHERE id_users = ?");
        $req->bindParam(1, $new_pict, PDO::PARAM_STR);
        $req->bindParam(2,$id, PDO::PARAM_INT);
        $req->execute();
        } catch (Exception $e) {
            die("Error : ". $e->getMessage());
        }
    }
