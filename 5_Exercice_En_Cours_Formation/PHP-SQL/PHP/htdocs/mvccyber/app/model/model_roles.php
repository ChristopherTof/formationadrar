<?php

// Creation des roles
function addRoles($bdd, string $nom): void
{
    try {
        $requete = $bdd->prepare('INSERT INTO roles(nom_roles) VALUE(?)');
        $requete->bindParam(1, $nom, PDO::PARAM_STR);
        $requete->execute();
    } catch (Exception $e) {
        die("Erreur : " . $e->getMessage());
    }
}

// Recherche des roles par son nom (gestion des doublons)
function getRolesByName(PDO $bdd, string $nom)
{
    try {
        $requete = $bdd->prepare('SELECT id_roles FROM roles WHERE nom_roles = ?');
        $requete->bindParam(1, $nom, PDO::PARAM_STR);
        $requete->execute();
        return $requete->fetch(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        die("Erreur : " . $e->getMessage());
    }
}
function getRolesById(PDO $bdd, string $id)
{
    try {
        $requete = $bdd->prepare('SELECT id_roles FROM roles WHERE id_roles = ?');
        $requete->bindParam(1, $id, PDO::PARAM_STR);
        $requete->execute();
        return $requete->fetch(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        die("Erreur : " . $e->getMessage());
    }
}

//Retourner la liste des roles (id_roles, nom_roles)
function getAllRoles(PDO $bdd)
{
    try {
        $requete = $bdd->prepare('SELECT id_roles, nom_roles FROM roles');
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        die("Erreur : " . $e->getMessage());
    }
}

//Mettre à jours les roles dans la BDD
function updateRolesByName(PDO $bdd, int $id, string $nom): void
{
    try {
        $requete = $bdd->prepare("UPDATE roles SET nom_roles = ? WHERE id_roles = ?");
        $requete->bindParam(1, $nom, PDO::PARAM_STR);
        $requete->bindParam(2, $id, PDO::PARAM_INT);
        $requete->execute();
    } catch (Exception $e) {
        die("Erreur : " . $e->getMessage());
    }
}
