<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
    <input type="text" name="nom">
        <button type="submit" value="Envoyer" name="submit"> Envoyer </button>

    </form>

    <form action="./result.php" method="post">
        <input type="text" name="nom2">
        <input type="text" name="prenom">
        <input type="text" name="email">
        <button type="submit" value="Envoyer" name="submit2"> Envoyer </button>
    </form>
    <h1> <?php  
    // REDIRECTION DU PHP VERS UNE AUTRE PAGE 
if(isset($_GET["error"])){
    $_GET["error"];
    echo "Veuillez remplir les champs.";
};
    ?></h1>
</body>
</html>

<?php


// Utilisation du Get : 
// Le get va récupérer les données entrèes dans les champs et va les indiquer dans la barre d'url
if(isset($_GET["nom"])){
    $_GET["nom"];
    echo "La valeur de l'input est : ".$_GET['nom'];
};

// La methode POST, elle va récupérer les donnée dans le corp du code html
////////////////////////////////////////////////////////// VERIFICATION DE CHAMP VIDE

if(isset($_POST["submit2"])){
    if (!empty($_POST["prenom"]) AND !empty($_POST["nom2"]) AND !empty($_POST["email"])){
        echo "La valeur de l'input est : ".$_POST['nom2'].'<br>';
        echo "La valeur de l'input est : ".$_POST['prenom'].'<br>';
        echo "La valeur de l'input est : ".$_POST['email'].'<br>';
    } else {
        echo "Veuillez remplir les champs.";
    }
    
};

// REDIRECTION DU PHP VERS UNE AUTRE PAGE 
if(isset($_GET["error"])){
    $_GET["error"];
    echo "Veuillez remplir les champs.";
};

// verifier les parametre d'un formulaire (si on y a pas acces)


?>