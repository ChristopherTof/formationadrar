<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <title>Liste des rôles</title>
</head>

<body>
    <?php include './app/vue/vue_navbar.php' ?>

    <h1>Liste des rôles :</h1>
    <?php foreach ($roles as $role) : ?>
        <p><?= $role["id_roles"] . " : " . $role["nom_roles"] ?> <a href="/mvccyber/roles/update/id?id=<?= $role["id_roles"] ?>"><i class="fa-solid fa-pen"></i></a></p>
    <?php endforeach; ?>

    <!-- Menu déroulant -->
    <select name="">
        <?php foreach ($roles as $role) : ?>
            <option value="<?= $role["id_roles"] ?>"> <?= $role["nom_roles"] ?></option>
        <?php endforeach; ?>

    </select>
    <p><?= $message ?></p>
</body>

</html>