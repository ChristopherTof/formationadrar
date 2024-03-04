<?php ob_start() ?>
<footer>
    <div class="mt-5 container-fluid">
        <div class="container d-flex flex-wrap py-3">
            <div class="col-4 mt-5">
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="/change_ton_climat">Accueil</a></li>
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
                <img src="public/asset/images/navbar/logoFooter.png" alt="Logo de chage ton climat" class="img-fluid" />
            </div>
            <div class="mt-5 col-4 d-flex justify-content-end">
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                        <a href="#"><img src="public/asset/images/navbar/icoFB.png" alt="Icone de direction vers Facebook" /></a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#"><img src="public/asset/images/navbar/icoInsta.png" alt="Icone de direction vers Instagram" /></a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#"><img src="public/asset/images/navbar/icoTwit.png" alt="Icone de direction vers Twitter" /></a>
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
<?php $footer = ob_get_clean() ?>