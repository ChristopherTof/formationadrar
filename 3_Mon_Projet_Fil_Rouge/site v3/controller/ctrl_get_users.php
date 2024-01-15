<?php
//appel à la base de données
include '../connectBdd.php';

//function de recherche de la liste de users à la base de données
function showAllUsers($bdd){
    try {
        //Preparation de la requete
        $requete = $bdd->prepare("SELECT id_users, firstname_users, lastname_users, email_users, image_users FROM users");
        //Execution de la requète
        $requete->execute();
        //Récupération des données dans un tableau
        $data= $requete->fetchAll(PDO::FETCH_ASSOC);
        return $data;

    } catch (Exception $e) {
        //throw $th;
        die ('Erreur : '. $e ->getMessage());
    }
}

function getUtilisateurById($bdd, $id)
{
    try {
        $req = $bdd->prepare("SELECT id_users, firstname_users, lastname_users, email_users, image_users FROM users WHERE id_users = ?");
        $req->bindParam(1, $id, PDO::PARAM_INT);
        $req->execute();
        $data = $req->fetch(PDO::FETCH_ASSOC);
        return $data;
    } catch (Exception $e) {
        die("Error : " . $e->getMessage());
    }
}