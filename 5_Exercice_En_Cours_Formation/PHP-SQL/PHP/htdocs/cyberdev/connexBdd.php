<?php

$bdd = new PDO(
    'mysql:host=localhost;dbname=cyber_exo',
    'root',
    'root',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

// try {
//     echo "La base est bien connecté";
// }
// catch(Execption $e){
//     die('Erreur de connexion :'.$e->getMessage());
// }