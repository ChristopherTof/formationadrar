<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <p>
        <?php
        //Afficher les info user
        //demarrer la session
        session_start();
        //creer la session
        if (isset($_SESSION['activated'])) {
            echo 'Bonjour ' . $_SESSION["prenom"] . " " . $_SESSION["nom"];
            echo '<a href="./deconnexion.php">Deconnexion</a>';
        }
        ?>

    </p>
    <form action="./verification.php" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="">
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="">
        <input type="submit" value="Envoyer" name="submit">
    </form>

    <p>
        <?php
        if (isset($_GET["error"])) {
            switch ($_GET["error"]) {
                case 1:
                    echo "Vous etes connecté";
                    break;
                case 2:
                    echo "Mdp Inccorect";
                    break;
                case 3:
                    echo "Veuillez remplir les champs";
            }
        }
        ?>
    </p>
</body>

</html>