<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="nom">Saisir le nom</label>
        <input type="text" name="nom">
        <label for="prenom">Saisir le prénom</label>
        <input type="text" name="prenom">
        <input type="submit" value="Ajouter" name="submit">
    </form>
</body>

</html>
<?php
include './utils.php';
include './connectBdd.php';
//récupération de la liste de tous les utiliateurs
$users = showAllUser($bdd);
//récupération de l'utilisateur qui a comme id = 1
$user = showUserById(2, $bdd);
//boucle for pour afficher la liste des utilisateurs (fetchAll)
for ($i = 0; $i < count($users); $i++) {
    echo "<p> id : " . $users[$i]["id"] . " nom : " . $users[$i]["nom"] . " prenom : " . $users[$i]["prenom"] . "<p>";
}
//boucle foreach pour afficher la liste des utilisateurs (fetchAll)
foreach ($users as $key) {
    echo "<p> id : " . $key["id"] . " nom : " . $key["nom"] . " prenom : " . $key["prenom"] . "<p>";
}
if ($user) {
    //version fetch afficher un utilisateur 
    echo "<p> id : " . $user["id"] . " nom : " . $user["nom"] . " prenom : " . $user["prenom"] . "<p>";
} else {
    echo "l'utilisateur n'existe pas";
}


//vérifier si le formulaire est submit
if (isset($_POST["submit"])) {
    //tester si les champs sont remplis
    if ($_POST["nom"] != "" and $_POST["prenom"] != "") {
        inject($_POST["nom"], $_POST["prenom"], $bdd);
        //ajouterUtilisateur($_POST["nom"],$_POST["prenom"],$bdd);
    }
    //test si les champs ne sont pas tous remplis
    else {
        echo "veuillez remplir tous les champs du formulaire";
    }
}

// FUNTION D'AJOUT SUR LA BDD
function ajouterUtilisateur(string $nom, string $prenom, $bdd)
{
    $bdd->query("INSERT INTO utilisateur(nom,prenom) VALUE('$nom', '$prenom')");
}

function ajouterUtilisateurPrepareV1(string $nom, string $prenom, $bdd)
{
    $requete = $bdd->prepare("INSERT INTO utilisateur(nom,prenom) VALUE(:nom, :prenom)");
    $requete->execute(
        ["nom" => $nom, "prenom" => $prenom]
    );
}
function ajouterUtilisateurPrepareV2(string $nom, string $prenom, $bdd)
{
    $requete = $bdd->prepare("INSERT INTO utilisateur(nom,prenom) VALUE(?,?)");
    $requete->bindParam(1, $nom, PDO::PARAM_STR);
    $requete->bindParam(2, $prenom, PDO::PARAM_STR);
    $requete->execute();
}

function inject(string $nom, string $prenom, $bdd)
{
    $bdd->query("SELECT id, nom, prenom FROM utilisateur WHERE nom = '$nom' AND '$prenom'");
}
function showAllUser($bdd)
{
    $requete = $bdd->prepare("SELECT id,nom,prenom FROM utilisateur");
    $requete->execute();
    $data = $requete->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function showUserById(int $id, $bdd)
{
    $requete = $bdd->prepare("SELECT id,nom,prenom FROM utilisateur WHERE id = ?");
    $requete->bindParam(1, $id, PDO::PARAM_INT);
    $requete->execute();
    $data = $requete->fetch(PDO::FETCH_ASSOC);
    return $data;
}
