<?php
    //démarrage de la session
    session_start();

    //Destruction de la session

    session_destroy();
    // On redirige vers la page d'index
    header('Location: ./index.php?deco');
?>