<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./register.php" method="post">
        <p><label for="nom">Votre nom</label>
            <input type="text" name="nom" id="">
        </p>
        <p><label for="prenom">Votre prenom</label>
            <input type="text" name="prenom" id="">
        </p>
        <p><label for="mail">Votre mail</label>
            <input type="email" name="mail" id="">
        </p>
        <p> <label for="password_utilisateur">Votre MDP</label>
            <input type="password" name="password_utilisateur" id="">
        </p>
        <p><label for="password_verification">Confirmer votre MDP</label>
            <input type="password" name="password_verification" id="">
        </p>

        <input type="submit" name="submit" value="Enregistrer">
    </form>
    <p>
        <?php
        //Tester si la super globale $_GET['error'] existe
        if (isset($_GET['error'])) {
            switch ($_GET['error']) {
                case 1:
                    echo 'Les champs ne sont pas remplis';
                    break;
                case 2:
                    echo 'Le compte existe déjà';
                    break;
                case 3:
                    echo 'les mots de passes sont différents';
                    break;
                case 4:
                    echo 'Le compte a bien été créer';
                    break;
            }
        }
        ?>
    </p>
</body>

</html>


<?php

include '../connexBdd.php';

?>