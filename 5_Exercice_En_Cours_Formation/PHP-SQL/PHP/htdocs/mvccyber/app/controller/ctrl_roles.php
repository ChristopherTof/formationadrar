<?php
//Ajout d'une fonction pour ggérer l'ajout des rôles en BDD
function insertRoles($bdd)
{
    //stocker les messages d'erreurs
    $message = "";
    //test si le bouton est cliqué
    if (isset($_POST["submit"])) {
        if (!empty($_POST['nom_roles'])) {
            //Netoyer nom_roles
            $nom = cleanInput($_POST['nom_roles']);
            //test si le role n'existe pas

            if (empty(getRolesByName($bdd, $nom))) {
                addRoles($bdd, $nom);
                $message = 'Le rôle ' . $nom . ' a bien été ajouté';
            }
            //Si le role existe déjà
            else {
                $message = 'Le rôle ' . $nom . ' existe déjà';
            }
        }
        //test si nom_roles est vide
        else {
            $message = "Veuillez remplir le champs de formulaire.";
        }
    }
    //Appel de la vue
    include_once './app/vue/vue_add_roles.php';
};

function showAllRoles($bdd)
{
    $message = '';
    //Recupération de la liste des rôles
    $roles = getAllRoles($bdd);
    if (!$roles) {
        $message = 'Aucun rôle est enregistré dans la base de donnée';
    }
    //importer la vue 
    include_once './app/vue/vue_get_all_roles.php';
}

function updateRoles($bdd)
{
    $id = cleanInput($_GET['id']);


    if (empty(getRolesById($bdd, $id))) {
        header('location:/mvccyber/roles/all');
    }

    $message = "";
    //teste si le bouton est cliqué
    if (isset($_POST["submit"])) {
        if (!empty($_POST['nom_roles'])) {
            //Netoyer nom_roles
            $nom = cleanInput($_POST['nom_roles']);
            //test si le role n'existe pas
            if (empty(getRolesByName($bdd, $nom))) {
                updateRolesByName($bdd, $id, $nom);
                $message = 'Le rôle ' . $nom . ' a bien été modifié';
                header("Refresh:1; url=/mvccyber/roles/all");
            }
            //Si le role existe déjà
            else {
                $message = 'Le rôle ' . $nom . ' existe déjà';
            }
        } else {
            $message = "Veuillez remplir le champs de formulaire.";
        }
    }
    //importer la vue
    include_once './app/vue/vue_update_roles.php';
}
