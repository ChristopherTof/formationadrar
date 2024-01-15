
<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bienvenue sur Change ton Climat</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="styles/stylesheet.css" />
  <script src="script/compteur.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"
    async></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"
    async></script>
</head>

<body>
<header class="navbar navbar-expand-lg mb-5">
    <a href="index.html" class="navbar-brand ms-3" style="font-family: 'Pacifico', cursive; font-size: 1.5rem">
      <img src="img/logo_navbar.png" alt="Logo Change ton climat" class="img-fluid"
        style="width: 100px; height: 100px" />Change Ton Climat
    </a>
    <button class="navbar-toggler mt-0 me-3" data-bs-toggle="offcanvas" data-bs-target="#navCanvas">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end w-100" tabindex="-1" id="navCanvas">
      <div class="offcanvas-header">
        <img src="img/logoCanvas.png" alt="Logo Change ton climat" />
        <img src="img/btnClosepng.png" alt="Bouton de fermeture de la navigation" data-bs-dismiss="offcanvas"
          style="cursor: pointer" class="ms-auto" />
      </div>
      <ul class="navbar-nav ms-auto me-auto me-lg-4 alignement">
        <li class="nav-item mb-3 d-lg-none">Menu</li>
        <li class="nav-item"><a href="index.php" class="">Accueil</a></li>
        <hr />
        <li class="nav-item"><a href="association.php" class="">L'association</a></li>
        <hr />
        <li class="nav-item"><a href="leschiffres.php" class="">Les chiffres</a></li>
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
            if (isset($_SESSION["connected"])){
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
            if (isset($_SESSION["connected"])){
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

  <!-- Section En-tête-->
  <!-- <section class="mb-5">
    <img src="img/asso/baniere_asso.jpg" alt="Image d'un ours sur la banquise" class="img-fluid">
  </section> -->

  <section>
    <article class="d-flex flex-row align-items-center mb-5">
      <div class="col-6 ps-4">
        <h1>L'association</h1>
      </div>
      <div class="col-6 text-end">
        <img src="img/titleRight.png" class="img-fluid" alt="image de fond de titre" />
      </div>
    </article>

    <article class="container px-4 px-lg-0 d-flex flex-wrap fs-5 ">
      <div class="col-12">
        <h2>L’association Change ton climat c’est ... </h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consectetur tristique posuere. Mauris eu
          ligula quis lectus consequat mattis. Nullam aliquam ante vel convallis eleifend. Nunc ipsum turpis, placerat
          porta orci vitae, ornare volutpat arcu. Donec sed erat sagittis, volutpat justo vel, ornare sapien.
        </p>
        <p>
          Créée par 3 acteurs luttant contre le réchauffement climatique
        </p>
      </div>
      <div class="col-12 col-lg-4 text-center">
        <img src="img/asso/perso1.png" class="img-fluid p-5" alt="photo de perso 1, créatrice de change ton climat">
        <p> Perso 1</p>
      </div>
      <div class="col-12 col-lg-4 text-center">
        <img src="img/asso/perso2.png" class="img-fluid p-5" alt="photo de perso 2, créatrice de change ton climat">
        <p>Perso 2</p>
      </div>
      <div class="col-12 col-lg-4 text-center">
        <img src="img/asso/perso3.png" class="img-fluid p-5" alt="photo de perso 3, créatrice de change ton climat">
        <p>Perso 3</p>
      </div>
    </article>

    <article class="d-flex flex-row align-items-center mb-5">
      <div class="col-6 text-start">
        <img src="img/titleLeft.png" class="img-fluid" alt="image de fond de titre" />
      </div>

      <div class="col-6 text-end pe-4">
        <h1>Notre mission</h1>
      </div>
    </article>

    <article class="container d-flex flex-wrap px-4 px-lg-0">
      <div class="col-12">
        <h3>Notre but? Vous sensibiliser 😃</h3>
        <p>Nous sommes bien conscient des difficultés que rencontrent les citoyens a trouver des solutions. C’est pour
          cela que nous avons développer cette association. Notre objectif se centre sur 6 axes :</p>
      </div>
      <div class="col-12 col-lg-4 d-flex flex-wrap mb-5">
        <div class="p-3 col-4 col-lg-12 text-center align-self-center">
          <img src="img/asso/patch1.png" class="img-fluid" alt="photo de perso 1, créatrice de change ton climat">
        </div>
        <div class="col-8 col-lg-12 px-lg-5">
          <h4 class="text-center">La coopération</h4>

          <p>Agir ensemble est le moyen le plus efficace de trouver des solutions : nos programmes favorisent les
            rencontres et l'écoute</p>
        </div>
      </div>

      <div class="col-12 col-lg-4 d-flex flex-wrap mb-4">
        <div class="p-3 col-4 col-lg-12 text-center align-self-center order-2 order-lg-1">
          <img src="img/asso/patch2.png" class="img-fluid" alt="photo de perso 1, créatrice de change ton climat">
        </div>
        <div class="col-8 col-lg-12 px-lg-5 order-1 order-lg-2">
          <h4 class="text-center">L'accompagnement</h4>

          <p>Déclencher les prises de conscience et accompagner les actions.</p>
        </div>
      </div>

      <div class="col-12 col-lg-4 d-flex flex-wrap mb-4">
        <div class="p-3 col-4 col-lg-12 text-center align-self-center">
          <img src="img/asso/patch3.png" class="img-fluid" alt="photo de perso 1, créatrice de change ton climat">
        </div>
        <div class="col-8 col-lg-12 px-lg-5">
          <h4 class="text-center">L'action</h4>

          <p>Agir et créer donne du sens à nos vies, nous aide à comprendre notre monde et enrichit nos relations.</p>
        </div>
      </div>

      <div class="col-12 col-lg-4 d-flex flex-wrap mb-4">
        <div class="p-3 col-4 col-lg-12 order-2 order-lg-1 text-center align-self-center">
          <img src="img/asso/patch4.png" class="img-fluid" alt="photo de perso 1, créatrice de change ton climat">
        </div>
        <div class="col-8 col-lg-12 order-1 order-lg-2 px-lg-5">
          <h4 class="text-center">L'amplification</h4>

          <p>Nous organisons la circulation et le partage des initiatives, des innovations et des solutions.</p>
        </div>
      </div>

      <div class="col-12 col-lg-4 d-flex flex-wrap mb-4">
        <div class="p-3 col-4 col-lg-12 text-center align-self-center">
          <img src="img/asso/patch5.png" class="img-fluid" alt="photo de perso 1, créatrice de change ton climat">
        </div>
        <div class="col-8 col-lg-12 px-lg-5">
          <h4 class="text-center">Le positif</h4>

          <p>Lucides et constructifs nous voyons les crises avant tout comme des invitations à se questionner et à
            créer.</p>
        </div>
      </div>

      <div class="col-12 col-lg-4 d-flex flex-wrap mb-4">
        <div class="p-3 col-4 col-lg-12 order-2 order-lg-1 text-center align-self-center">
          <img src="img/asso/patch6.png" class="img-fluid" alt="photo de perso 1, créatrice de change ton climat">
        </div>
        <div class="col-8 col-lg-12 order-1 order-lg-2 px-lg-5">
          <h4 class="text-center">Le pragmatisme</h4>

          <p>Notre objectif est de susciter une entrée en démarche, parfois modeste mais toujours concrète et continue.
            Nous adaptons nos propositions aux ambitions et aux contraintes de chacun.</p>
        </div>
      </div>

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

</html>