<?php
//Fonction pour nettoyer les entrées utilisateurs
function cleanInput(?string $value): ?string
{
    return htmlspecialchars(strip_tags(trim($value)), ENT_NOQUOTES);
}
// Fonction pour verifier les extensions de fichiers
function getFileExtension($file)
{
    return substr(strrchr($file, '.'), 1);
}
