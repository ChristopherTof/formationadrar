<?php
//appel à la base de données
include './connectBdd.php';

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