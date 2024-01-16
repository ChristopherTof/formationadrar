<?php ob_start() ?>
<!-- Section du caroussel-->
<section class="mb-5">
    <div class="carousel slide" id="carousselIndex" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="4000">
                <img src="public/asset/images//index/caroussel1.jpg" class="d-block img-fluid" alt="" />
            </div>
            <div class="carousel-item" data-bs-interval="4000">
                <img src="public/asset/images//index/caroussel2.jpg" class="d-block img-fluid" alt="..." />
            </div>
            <div class="carousel-item" data-bs-interval="4000">
                <img src="public/asset/images//index/caroussel3.jpg" class="d-block img-fluid" alt="..." />
            </div>
            <div class="carousel-item" data-bs-interval="4000">
                <img src="public/asset/images//index/caroussel4.jpg" class="d-block img-fluid" alt="..." />
            </div>
            <div class="carousel-item" data-bs-interval="4000">
                <img src="public/asset/images//index/caroussel5.jpg" class="d-block img-fluid" alt="..." />
            </div>
        </div>
    </div>
</section>
<section class="container-fluid p-0 mb-5">
    <article class="d-flex flex-row align-items-center mb-5">
        <div class="col-6 ps-4">
            <h1>Le réchauffement climatique, c'est quoi?</h1>
        </div>
        <div class="col-6 text-end">
            <img src="public/asset/images/titleRight.png" class="img-fluid" alt="image de fond de titre" />
        </div>
    </article>

    <article class="container px-4 px-lg-0">
        <div class="fs-5 col-12">
            <p>
                Les gaz à effet de serre (GES) ont un rôle essentiel dans la régulation du climat. Sans eux, la température
                moyenne sur Terre serait de
                -18 °C au lieu de +14 °C et la vie n’existerait peut-être pas. Toutefois, depuis le XIXe siècle, l’homme a
                considérablement accru la
                quantité de gaz à effet de serre présents dans l’atmosphère. En conséquence, l’équilibre climatique naturel
                est modifié et le climat se
                réajuste par un réchauffement de la surface terrestre.
            </p>
        </div>
        <div class="col-8 offset-2 text-center mb-5">
            <img src="public/asset/images/index/serreEffect1.png" alt="Schema de l'effet de serre" class="img-fluid" />
        </div>
        <div class="fs-5 col-12">
            <p>
                Nous pouvons déjà constater les effets du changement climatique. C’est pourquoi il convient de se mobiliser et
                d’agir. Tout le monde est
                concerné : élus, acteurs économiques, citoyens, pour réduire nos émissions de gaz à effet de serre, mais aussi
                pour s’adapter aux
                changements déjà engagés.
            </p>
        </div>
    </article>
</section>
<section class="container-fluid p-0">
    <article class="d-flex flex-row align-items-center mb-5">
        <div class="col-6 text-start">
            <img src="public/asset/images/titleLeft.png" class="img-fluid" alt="image de fond de titre" />
        </div>
        <div class="col-6 text-end pe-4">
            <h1>Le réchauffement climatique, c'est quoi?</h1>
        </div>
    </article>
    <article class="container d-flex flex-wrap fs-5 px-4 px-lg-0">
        <div class="col-12">
            <h3>Il existe plusieurs solutions ...</h3>
            <p>Nulla accumsan quam id venenatis tempor. Integer eget arcu tortor. Etiam in euismod arcu. Cras eget iaculis
                enim.</p>
        </div>

        <div class="col-12 col-lg-5 mb-4">
            <img src="public/asset/images/index/bike1.png" alt="image d'un homme faisant du vélo" class="img-fluid mx-auto d-block" />
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consectetur tristique posuere.</p>
            <a href="suggestions.html" class="btn btn-outline-success d-block" role="button">En savoir plus</a>
        </div>
        <div class="col-12 col-lg-5 mb-4 offset-lg-2">
            <img src="public/asset/images/index/ecoEnergie.png" alt="image représentation de l'économie d'énergie" class="img-fluid mx-auto d-block" />
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consectetur tristique posuere.</p>
            <a href="suggestions.html" class="btn btn-outline-success d-block" role="button">En savoir plus</a>
        </div>
        <div class="col-12 col-lg-5 mb-4">
            <img src="public/asset/images/index/electricCar1.png" alt="image d'une voiture électrique" class="img-fluid mx-auto d-block" />
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consectetur tristique posuere.</p>
            <a href="suggestions.html" class="btn btn-outline-success d-block" role="button">En savoir plus</a>
        </div>
        <div class="col-12 col-lg-5 mb-4 offset-lg-2">
            <img src="public/asset/images/index/marche1.png" alt="image de jeune gens marchant" class="img-fluid mx-auto d-block" />
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consectetur tristique posuere.</p>
            <a href="suggestions.html" class="btn btn-outline-success d-block" role="button">En savoir plus</a>
        </div>
    </article>
</section>
<?php $content = ob_get_clean() ?>