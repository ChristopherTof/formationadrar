<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter roles</title>
</head>

<body>
    <?php include './app/vue/vue_navbar.php' ?>
    <h1>S'inscrire</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <p><label for="nom_utilisateur">Votre nom</label>
            <input type="text" name="nom_utilisateur">
        </p>
        <p><label for="prenom_utilisateur">Votre prénom</label>
            <input type="text" name="prenom_utilisateur">
        </p>
        <p><label for="email_utilisateur">Votre email</label>
            <input type="email" name="email_utilisateur">
        </p>
        <p><label for="password_utilisateur">Votre mot de passe</label>
            <input type="password" name="password_utilisateur">
        </p>
        <p><label for="password_verify">Confirmer mot de de passe</label>
            <input type="password" name="password_verify">
        </p>
        <p><label for="url_image">Choisir une image</label>
            <input type="file" name="url_image">
        </p>

        <input type="submit" value="Ajouter" name="submit">
    </form>

    <p><?= $message ?></p>
</body>

</html>