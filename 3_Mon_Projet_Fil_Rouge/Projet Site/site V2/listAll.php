<?php 
include ('./controller/ctrl_get_users.php');

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// Mise en place des données à afficher
$users = showAllUsers($bdd);
//Verification que la table n'est pas vide
if (!empty($users)){
    foreach ($users as $user){
        $id = $user["id_users"];
$firstName = $user["firstname_users"];
$lastName = $user["lastname_users"];
$email = $user["email_users"];
$image = $user["image_users"];

        echo "<p>ID : ".$id."</p>";
        echo "<p>Prenom : ".$firstName."</p>";
        echo "<p>Nom : ".$lastName."</p>";
        echo "<p>Email : ".$email."</p>";
        echo '<p>Photo de profil : <img src"'.$image.'"/></p>';
    }
} 
//Si la table est vide
else {
    $messageError = "Aucun Utuilisateur a afficher";
}
?>

</body>
</html>

