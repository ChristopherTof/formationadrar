<?php
$bdd = new PDO(
    'mysql:host=localhost;dbname=cyberdev',
    'root',
    '',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);
