<?php
session_start();
if (isset($_SESSION["connected"])){
    echo "okaaaaaayyyyyyy".$_SESSION["username"];
   
} else {
    echo "Que fais tu ici chenapant???";
}

?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <a href="deconnexion.php">Deconnexxion</a>
   <h1>Bienvenue</h1>

</body>
</html>

