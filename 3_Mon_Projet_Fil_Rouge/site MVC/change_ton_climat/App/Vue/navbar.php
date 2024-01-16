<?php ob_start() ?>
<header class="navbar navbar-expand-lg mb-5">
    <a href="/change_ton_climat" class="navbar-brand ms-3" style="font-family: 'Pacifico', cursive; font-size: 1.5rem">
        <img src="public/asset/images/navbar/logo_navbar.png" alt="Logo Change ton climat" class="img-fluid" style="width: 100px; height: 100px" />Change Ton Climat
    </a>
    <button class="navbar-toggler mt-0 me-3" data-bs-toggle="offcanvas" data-bs-target="#navCanvas">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end w-100" tabindex="-1" id="navCanvas">
        <div class="offcanvas-header">
            <img src="public/asset/images/navbar/logoCanvas.png" alt="Logo Change ton climat" />
            <img src="public/asset/images/navbar/btnClosepng.png" alt="Bouton de fermeture de la navigation" data-bs-dismiss="offcanvas" style="cursor: pointer" class="ms-auto" />
        </div>
        <ul class="navbar-nav ms-auto me-auto me-lg-4 alignement">
            <li class="nav-item mb-3 d-lg-none">Menu</li>
            <li class="nav-item"><a href="/change_ton_climat" class="">Accueil</a></li>
            <hr />
            <li class="nav-item"><a href="/change_ton_climat/chiffre" class="">L'association</a></li>
            <hr />
            <li class="nav-item"><a href="/change_ton_climat/chiffre" class="">Les chiffres</a></li>
            <hr />
            <li class="nav-item"><a href="suggestions.html" class="">Suggestion</a></li>
            <hr />
            <li class="nav-item"><a href="#" class="">Liens utiles</a></li>
            <hr />
            <li class="nav-item"><a href="#" class="">Forum</a></li>
            <hr />
            <li class="nav-item"><a href="contact.html" class="">Contact</a></li>
            <li class="nav-item d-none d-lg-block">
                <?php
                if (isset($_SESSION["connected"])) {
                    echo  '<a href="profil.php" class=""><i class="bi bi-person h5"></i></a>';
                    echo  '<a href="deconnexion.php" class=""><i class="bi bi-box-arrow-right"></i></a>';
                } else {
                    echo  '<a href="login.html" class=""><i class="bi bi-person h5"></i></a>';
                }
                ?>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto me-auto d-lg-none pt-5">
            <?php
            if (isset($_SESSION["connected"])) {
                echo  '<a href="profil.php" class="">Mon profil</a>';
                echo "<hr />";
                echo  '<a href="deconnexion.php" class="">Se déconnecter</a>';
            } else {
                echo '<li class="nav-item"><a href="login.html" class="">Se Connecter</a></li>';
                echo "<hr />";
                echo '<li class="nav-item"><a href="inscription.html" class="">S\'inscrire</a></li>';
            }
            ?>
        </ul>
    </div>
</header>
<?php $navbar = ob_get_clean() ?>