<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>

<body>
    <p><a href="index.php">Home</a></p>
    <p><a href="page2.php">Page 2</a></p>
    <p><a href="deco.php">Deconnexion</a></p>
</body>

</html>

<?php
//démarrage de la session (à utiliser sur toutes les pages)
session_start();
//création super globale $_SESSION['page1']
$_SESSION['page1'] = 'page1';
//affichage du contenu de la super globale $_SESSION['name']
echo '' . $_SESSION['name'] . ' est connecté';
//test si on à parcouru la page page1.php
if (isset($_SESSION['page1'])) {
    echo '<p>Nous avons visité la page1.php</p>';
}
if (isset($_SESSION['page2'])) {
    echo '<p>Nous avons visité la page2.php</p>';
}
?>