<?php
//Démarrer la session
session_start();
//Deconnecter la session
session_destroy();
//supprimer le cookie de session
unset($_COOKIE["PHPSESSID"]);
//Rediriger vers la page de connexion
header("location:./connexion.php");
