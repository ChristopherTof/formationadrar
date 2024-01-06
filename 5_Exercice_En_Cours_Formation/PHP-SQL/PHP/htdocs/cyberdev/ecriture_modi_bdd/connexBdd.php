<?php

$bdd = new PDO(
    'mysql:host=localhost;dbname=cyber_exo',
    'root',
    '',
    //Activation des erreurs sql
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

// try {
//     echo "La base est bien connecté";
// } catch (Exception $e) {
//     die('Erreur de connexion :' . $e->getMessage());
// }
