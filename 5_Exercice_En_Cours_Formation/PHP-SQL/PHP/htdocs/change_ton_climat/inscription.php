<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="styles/stylesheet.css" />
    <script src="script/script.js" async></script>
    <script src="script/validateCtc.js" async></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous" async></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous" async></script>
</head>

<body>
    <header class="navbar navbar-expand-lg mb-5">
        <a href="index.html" class="navbar-brand ms-3" style="font-family: 'Pacifico', cursive; font-size: 1.5rem">
            <img src="img/logo_navbar.png" alt="Logo Change ton climat" class="img-fluid" style="width: 100px; height: 100px" />Change Ton Climat
        </a>
        <button class="navbar-toggler mt-0 me-3" data-bs-toggle="offcanvas" data-bs-target="#navCanvas">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end w-100" tabindex="-1" id="navCanvas">
            <div class="offcanvas-header">
                <img src="img/logoCanvas.png" alt="Logo Change ton climat" />
                <img src="img/btnClosepng.png" alt="Bouton de fermeture de la navigation" data-bs-dismiss="offcanvas" style="cursor: pointer" class="ms-auto" />
            </div>
            <ul class="navbar-nav ms-auto me-auto me-lg-4 alignement">
                <li class="nav-item mb-3 d-lg-none">Menu</li>
                <li class="nav-item"><a href="index.html" class="">Accueil</a></li>
                <hr />
                <li class="nav-item"><a href="association.html" class="">L'association</a></li>
                <hr />
                <li class="nav-item"><a href="leschiffres.html" class="">Les chiffres</a></li>
                <hr />
                <li class="nav-item"><a href="suggestions.html" class="">Suggestion</a></li>
                <hr />
                <li class="nav-item"><a href="#" class="">Liens utiles</a></li>
                <hr />
                <li class="nav-item"><a href="#" class="">Forum</a></li>
                <hr />
                <li class="nav-item"><a href="contact.html" class="">Contact</a></li>
                <li class="nav-item d-none d-lg-block">
                    <a href="login.html" class=""><i class="bi bi-person h5"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto me-auto d-lg-none pt-5">
                <li class="nav-item"><a href="#" class="">Se Connecter</a></li>
                <hr />
                <li class="nav-item"><a href="#" class="">S'inscrire</a></li>
            </ul>
        </div>
    </header>

    <section class="container-fluid p-0">
        <article class="d-flex flex-row align-items-center mb-5">
            <div class="col-6 ps-4">
                <h1>Inscription</h1>
            </div>
            <div class="col-6 text-end">
                <img src="img/titleRight.png" class="img-fluid" alt="image de fond de titre" />
            </div>
        </article>

        <article class="container d-flex flex-wrap px-4 px-lg-0">
            <div class="col-12 fs-5">
                <p>Pour te créer un compte, merci de remplir les champs suivants :</p>
            </div>


            <form action="" method="POST" class="container d-flex flex-wrap px-0 needs-validation mb-5" novalidate>

                <div class="col-12 col-lg-5 mb-3">
                    <label for="inscripFirstN" class="form-label">Prenom*</label>
                    <input type="text" name="inscripFirstN" id="inscripFirstN" class="form-control" required>
                    <div class="invalid-feedback">Le champs n'est pas valide</div>
                </div>

                <div class="col-12 col-lg-5 offset-lg-2 mb-3">
                    <label for="inscripLastN" class="form-label">Nom*</label>
                    <input type="text" name="inscripLastN" id="inscripLastN" class="form-control" required>
                    <div class="invalid-feedback">Le champs n'est pas valide</div>
                </div>


                <div class="col-12 col-lg-5 mb-3">
                    <label for="inscripMail" class="form-label">Email*</label>
                    <input type="email" name="inscripMail" id="inscripMail" class="form-control" required>
                    <div class="invalid-feedback">Le champs n'est pas valide</div>
                </div>

                <div class="col-12 col-lg-5 offset-lg-2 mb-3">
                    <label for="inscripPseudo" class="form-label">Pseudo*</label>
                    <input type="text" name="inscripPseudo" id="inscripPseudo" class="form-control" required>
                    <div class="invalid-feedback">Le champs n'est pas valide</div>
                </div>

                <div class="col-12 col-lg-5 mb-3">
                    <label for="inscripMdp" class="form-label">Mot de passe*</label>
                    <input type="password" name="inscripMdp" id="inscripMdp" class="form-control" required>
                    <div class="invalid-feedback">Mot de passe obligatoire</div>
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="col-4 btn btn2" name="submit_inscrip">Inscription</button>
                </div>
            </form>
        </article>
    </section>

    <footer>
        <div class="mt-5 container-fluid">
            <div class="container d-flex flex-wrap py-3">
                <div class="col-4 mt-5">
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="index.html">Accueil</a></li>
                        <li class="nav-item mb-2"><a href="association.html">L'association</a></li>
                        <li class="nav-item mb-2"><a href="leschiffres.html">Les chiffres</a></li>
                        <li class="nav-item mb-2"><a href="suggestions.html">Suggestion</a></li>
                        <li class="nav-item mb-2"><a href="#">Liens utiles</a></li>
                        <li class="nav-item mb-2"><a href="#">Forum</a></li>
                        <li class="nav-item mb-2"><a href="contact.html">Contact</a></li>
                        <li class="nav-item mb-2"><a href="#">Se connecter</a></li>
                        <li class="nav-item mb-2"><a href="#">S'inscrire</a></li>
                    </ul>
                </div>
                <div class="col-4 d-flex justify-content-center align-items-start">
                    <img src="img/logoFooter.png" alt="Logo de chage ton climat" class="img-fluid" />
                </div>
                <div class="mt-5 col-4 d-flex justify-content-end">
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2">
                            <a href="#"><img src="img/icoFB.png" alt="Icone de direction vers Facebook" /></a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#"><img src="img/icoInsta.png" alt="Icone de direction vers Instagram" /></a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#"><img src="img/icoTwit.png" alt="Icone de direction vers Twitter" /></a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 mt-3 d-flex justify-content-center justify-content-md-start">
                    &copy;2023 Christopher Chiarandini. All rights Reserved
                </div>
                <div class="col-12 col-md-3 mt-3 d-flex justify-content-center justify-content-md-end">
                    <a href="#">Privacy & Policy</a>
                </div>
                <div class="col-12 col-md-3 mt-3 d-flex justify-content-center justify-content-md-end">
                    <a href="#">Terms & Conditions</a>
                </div>
            </div>
        </div>
    </footer>
</body>

<?php
//Connexion à la BDD
include './connectBdd.php';

// Récupération des donnnées et lancement de la fonction de création de users
if (isset($_POST['submit_inscrip'])) {
    if (!empty($_POST['inscripFirstN']) and !empty($_POST['inscripLastN']) and !empty($_POST['inscripMail']) and !empty($_POST['inscripPseudo']) and !empty($_POST['inscripMdp'])) {
        addUser($_POST['inscripFirstN'], $_POST['inscripLastN'], $_POST['inscripMail'], $_POST['inscripPseudo'], $_POST['inscripMdp'], $bdd);

        header('location:./validateinscription.php');
    } else {
        echo "Veuillez remplir les champs du formulaire";
    }
}

//Fonction Création des utilisateur sur la BDD
function addUser(string $inscripFirstN, string $inscriptLastN, string $inscriptMail, string $inscripPseudo, string $inscripMdp, $bdd)
{
    //initialisation de la date 
    try {
        //Preparation de l'insertion des valeurs dans la BDD
        $req = $bdd->prepare("INSERT INTO users(username_users,firstname_users,lastname_users,email_users,password_users,date_inscription_users,is_moderator) VALUE (?,?,?,?,?,?,?)");
        $req->bindParam(1, $inscripPseudo, PDO::PARAM_STR);
        $req->bindParam(2, $inscripFirstN, PDO::PARAM_STR);
        $req->bindParam(3, $inscriptLastN, PDO::PARAM_STR);
        $req->bindParam(4, $inscriptMail, PDO::PARAM_STR);
        $req->bindParam(5, $inscripMdp, PDO::PARAM_STR);
        $req->bindValue(6, date('Y-m-d'), PDO::PARAM_STR);
        $req->bindValue(7, '0', PDO::PARAM_STR);
        //Execution du paramétrage
        $req->execute();
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}


?>

</html>