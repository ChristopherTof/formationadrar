<?php
//Fonction pour nettoyer les entrées utilisateurs
function cleanInput(?string $value): ?string
{
    return htmlspecialchars(strip_tags(trim($value)), ENT_NOQUOTES);
}
// Fonction pour verifier les extensions de fichiers
function getFileExtension($url_image)
{
    return substr(strrchr($url_image, '.'), 1);
}

//Automatisation d'affichage de tableau
function printInfo($content, $param = false)
{
    echo '<pre>';
    var_dump($content);
    echo '</pre>';
    if ($param) {
        die;
    }
}
