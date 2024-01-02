<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <p><a href="page1.php">Page 1</a></p>
    <p><a href="index.php">Home</a></p>
    <p><a href="deco.php">Deconnexion</a></p>
</body>
</html>

<?php
    //Démarrage de la session (à utiliser sur toutes les pages)
    session_start();
    $_SESSION['page2'] = 'page2';

    //Affichage du contenu de la super glable name
    echo ''.$_SESSION['name'].' est passé par ici !!';

    // test si on a parcouru la page 1
    if (isset($_SESSION['page1'])){
        echo '<p>On a visité la page 1 !!</p>';
    }

    // test si on a parcouru la page 2
    if (isset($_SESSION['page2'])){
        echo '<p>On a visité la page 2 !!</p>';
    }
?>