<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page accueil</title>
</head>

<body>
    <header>
        <?php
        include './modules/navbar.php';
        ?>
    </header>
    <!-- corp de ma page-->
    <form action="" method="post">
        <label for="name">saisir le nom</label>
        <input type="text" name="nom">
        <input type="submit" value="envoyer">
    </form>
    <?php
    require './modules/footer.php';
    ?>
</body>

</html>