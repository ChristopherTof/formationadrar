<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <p><a href="page1.php">Page 1</a></p>
    <p><a href="page2.php">Page 2</a></p>
    <p><a href="deco.php">Deconnexion</a></p>
</body>
</html>

<?php
    //Démarrage de la session (à utiliser sur toutes les pages)
    session_start();
    $_SESSION['name'] = "Christopher";
    
    //Affichage du contenu de la super globale $_SESSION
    echo "".$_SESSION['name']." est connecté.";

    //test si on a parcouru la page1.php
    if(isset($_SESSION['page1'])){
        echo '<p>Nous avons parcouru la Page 1</p>';
    }

    //test si on a parcouru la page2.php
    if(isset($_SESSION['page2'])){
        echo '<p>Nous avons parcouru la Page 2</p>';
    }

    //test si on a parcouru la deco.php
    if(isset($_SESSION['deco'])){
        echo '<p>Deconnecté</p>';
    }
?>