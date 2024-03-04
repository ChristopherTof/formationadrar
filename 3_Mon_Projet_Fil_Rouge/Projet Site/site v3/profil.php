<?php
session_start();
<<<<<<< HEAD
if (isset($_SESSION["connected"])){
    echo "okaaaaaayyyyyyy".$_SESSION["username"];
   
} else {
    echo "Que fais tu ici chenapant???";
}

?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <a href="deconnexion.php">Deconnexxion</a>
   <h1>Bienvenue</h1>

</body>
</html>

=======
if (!isset($_SESSION["connected"])){
    header("Refresh:0; url=./index.php");
} 
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>profil</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styles/stylesheet.css" />
    <script src="script/script.js" async></script>
    <script src="script/validateCtc.js" async></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
      async
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
      async
    ></script>
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

    <section>
      <article class="d-flex flex-row align-items-center mb-5">
        <div class="col-6 ps-4">
          <h1>Mon compte</h1>
        </div>
        <div class="col-6 text-end">
          <img src="img/titleRight.png" class="img-fluid" alt="image de fond de titre" />
        </div>
      </article>

      <article class="container d-flex flex-wrap mb-5">
        <div class="col-10 offset-1 col-lg-5 offset-lg-0 fs-5 mb-3 container d-flex flex-wrap message">
          <div class="col-6 py-5">
            Tu as reçu<br />
            <!-- MODIFICATION A PREVOIR EN PHP -->
            <strong class="fs-1">X</strong><br />
            <!-- FIN MODIFICATION -->
            nouveau(x) message(s)<br />
          </div>
          <div class="col-6 align-self-center text-center">
            <img src="img/profil/env.png" alt="" class="img-fluid mod" />
          </div>
        </div>

        <div class="col-10 offset-1 col-lg-5 offset-lg-0 mb-3 container d-flex flex-wrap reponse">
          <div class="col-6 py-5">
            <!-- MODIFICATION A PREVOIR EN PHP -->
            <strong class="fs-1">X</strong> personne(s)<br />
            <!-- FIN MODIFICATION -->
            t'a répondu<br />
          </div>
          <div class="col-6 align-self-center text-center">
            <img src="img/profil/arrow.png" alt="" class="img-fluid mod" />
          </div>
        </div>
      </article>

      <article class="d-flex flex-row align-items-center mb-5">
        <div class="col-6 text-start">
          <img src="img/titleLeft.png" class="img-fluid" alt="image de fond de titre" />
        </div>
        <div class="col-6 text-end pe-4">
          <p class="h1">Mes infos personnelles</p>
        </div>
      </article>

      <article class="container d-flex flex-wrap mb-5">
        <div class="col-10 offset-1 col-lg-5 offset-lg-0 fs-5 container d-flex flex-wrap justify-content-center">
          <div class="align-self-center">
            <img src="<?=$_SESSION['image']?>" alt="" class="img" style="width: 15vw" />
          </div>
          
        </div>
        

        <div class="col-10 offset-1 col-lg-5 offset-lg-0 container d-flex flex-wrap info_perso">
          <?php if(isset($_GET["modify"])) :?>
            <form action="./controller/ctrl_update_users.php" method="POST">
              <p><label for="username"><span>Pseudo</span></label>
              <p><input type="text" class="form-control" name="username" value="<?= $_SESSION['username'] ?>"  readonly></p>
            
              <p><label for="email"><span>Email :</span></label>
              <p><input type="mail" class="form-control" name="email" value="<?= $_SESSION['email'] ?>"></p>
            
              <p><label for="lastname"><span>Nom:</span> </label>
              <p><input type="text" class="form-control" name="lastname" value="<?= $_SESSION['lastname'] ?>"></p>
            
              <p> <label for="firstname"><span>Prenom</span></label>
              <p><input type="text" class="form-control" name="firstname" value="<?= $_SESSION['firstname'] ?>"></p>
              <p><input type="submit" value="Mettre à jour" name="btn_submit"></p>
            </form>
          <?php endif;?>

          <?php if(!isset($_GET["modify"])): ?>
            <div class="col-12 pt-1 text-end">
              <a href="profil.php?modify=profil"><img src="img/profil/modif.png" alt="icone de modification d'information" style="width:1.5vw;"/></a>
            </div>            
            <div class="col-12">
              <p><span>Pseudo</span></p>
              <p><?= $_SESSION["username"]?></p>
              <p><span>Email</span></p>
              <p><?= $_SESSION["email"]?></p>
              <p><span>Nom</span></p>
              <p><?= $_SESSION["lastname"]?></p>
              <p><span>Prenom</span></p>
              <p><?= $_SESSION["firstname"]?></p>
            </div>
          <?php endif;?>
        </div>   
      </article>

      <article class="d-flex flex-row align-items-center mb-5">
        <div class="col-6 ps-4">
          <h1>Gérer mon compte</h1>
        </div>
        <div class="col-6 text-end">
          <img src="img/titleRight.png" class="img-fluid" alt="image de fond de titre" />
        </div>
      </article>

      <article class="container d-flex flex-wrap">
        <form action="" method="post" class="container d-flex flex-wrap">
          <div class="container d-flex flex-wrap col-12 mb-5">
            <div class="col-6 fs-5"><label for="receive_news">Recevoir la Newsletter</label></div>
            <div class="col-3 fs-5 text-center">
              <div class="form-check form-switch form-check-reverse">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckReverse" name="receive_news" />
              </div>
            </div>
          </div>

          <div class="container d-flex flex-wrap col-12 mb-5">
            <div class="col-6 fs-5"><label for="mail_for_message">Recevoir un mail lors de la réception d'un message</label></div>
            <div class="col-3 fs-5 text-center">
              <div class="form-check form-switch form-check-reverse">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckReverse" name="mail_for_message" />
              </div>
            </div>
          </div>

          <div class="container d-flex flex-wrap col-12 mb-5">
            <div class="col-6 fs-5"><label for="mail_for_response"></label>Recevoir un mail lors de la réception d'une réponse sur le forum</div>
            <div class="col-3 fs-5 text-center">
              <div class="form-check form-switch form-check-reverse">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckReverse" name="mail_for_response" />
              </div>
            </div>
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
</html>
>>>>>>> 250f4a6019b893a10517250f7d1a6d3cea7fd4d4
