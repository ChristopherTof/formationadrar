<?php

    $bdd = new PDO(
        // Initialisation des infos de la BDD
        'mysql:host=localhost;dbname=change_ton_climat',
        'root',
        'root',

        // Activation des erreur sql
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    // Test si il y a des erreurs 

    try{
     
    } catch (Exception $e){
        die('Erreur de connexion : '. $e->getMessage());
    }

?>