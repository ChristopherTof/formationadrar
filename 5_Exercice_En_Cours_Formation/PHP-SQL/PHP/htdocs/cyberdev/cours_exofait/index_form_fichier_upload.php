<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Global file</title>
</head>

<body>
    <h1> La super globale File</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="nom">Saisir votre nom</label>
        <input type="text" name="nom">
        <label for="prenom">Saisir votre prénom</label>
        <input type="text" name="prenom">
        <label for="image">Importer votre image</label>
        <input type="file" name="image">

        <input type="submit" value="envoyer" name="btn_submit">
    </form>
    <!-- // Partie HTML :
// Ajouter dans le fichier un formulaire HTML qui va contenir les éléments suivants :
// -1 input de type text name : nom,
// -1 input de type text name : prenom,
// -1 input de type email name : email,
// -1 input de type password name : password,
// -1 input de type file name : fichier,
// -1 input de type submit name : submit  -->
    <h1> Exercice PHP : Enregistrement d'un user </h1>
    <form action="" method="post" enctype="multipart/form-data">

        <label for="ex_nom">Votre nom : </label>
        <input type="text" name="ex_nom"> </br>
        <label for="ex_prenom">Votre prénom : </label>
        <input type="text" name="ex_prenom"> </br>
        <label for="ex_mail">Votre email : </label>
        <input type="email" name="ex_mail"> </br>
        <label for="ex_password">Votre Mot de Passe : </label>
        <input type="password" name="ex_password"> </br>
        <label for="ex_file">Votre fichier : </label>
        <input type="file" name="ex_file"> </br>

        <input type="submit" value="envoyer" name="ex_submit">
    </form>


</body>

</html>
<?php
// tester si le btn est submit
if (isset($_POST['btn_submit'])) {
    echo "<pre>";
    var_dump($_FILES["image"]);
    echo "</pre>";

    $ext = getFileExtension($_FILES["image"]["name"]);
    echo $ext;

    if ($ext === "png" or $ext === "PNG" or $ext === "jpg" or $ext === "JPG") {
        if ($_FILES["image"]["size"] <= 10241024) {
            //code ici
            move_uploaded_file($_FILES['image']['tmp_name'], './image/' . $_FILES["image"]["name"]);
        }
    } else {
        echo "Format de fichier incorrect";
    }
}
function getFileExtension($file)
{
    return substr(strrchr($file, '.'), 1);
}



//     Exercice 16 super globale POST et FILES :
// Partie HTML :
// Ajouter dans le fichier un formulaire HTML qui va contenir les éléments suivants :
// -1 input de type text name : nom,
// -1 input de type text name : prenom,
// -1 input de type email name : email,
// -1 input de type password name : password,
// -1 input de type file name : fichier,
// -1 input de type submit name : submit
// Partie PHP :
// -Vérifier si le formulaire est submit,
// -Vérifier si les champs sont bien remplis (nom, prénom, email, passord),
// -Si les champs sont vides -> afficher un message "veuillez remplir tous les champs du formulaire",
// -vérifier si un fichier à été importé $_FILES["fichier"]["tmp_name"],
// -Si le fichier est importé -> déplacer dans un répertoire fichier,
// -Sinon ne rien importer ->  afficher un message "il n'y a pas de fichier",

// BONUS
// Vérifier si le format est : png, jpg, jpeg et pdf,
// Vérifier si le taille du fichier est plus petit que 1 Mo

if (isset($_POST['ex_submit'])) {
    if (!empty($_POST["ex_nom"]) and !empty($_POST["ex_prenom"]) and !empty($_POST["ex_password"])) {
        // strtolower passe les maj en min
        $exten = strtolower(getFileExtensionEx($_FILES["ex_file"]["name"]));

        if ($_FILES['ex_file']['tmp_name'] != "") {
            if ($exten === "png" or $exten === "jpg" or $exten === "jpeg"  or $exten === "pdf") {
                if ($_FILES["ex_file"]["size"] <= 1000000) {
                    move_uploaded_file($_FILES['ex_file']['tmp_name'], './image/' . $_FILES["ex_file"]["name"]);
                    echo "Le fichier a bien été enregistré.";
                } else {
                    echo "Le fichier est trop lourd. Merci d'envoyer un fichier de 1Mo";
                }
            } else {
                echo "Fichier invalide";
            }
        } else {
            echo "Il n'y a pas de fichier";
        }
    } else {
        echo "veuillez remplir tous les champs du formulaire <br>";
    }
}

function getFileExtensionEx($file)
{
    return substr(strrchr($file, '.'), 1);
}

?>