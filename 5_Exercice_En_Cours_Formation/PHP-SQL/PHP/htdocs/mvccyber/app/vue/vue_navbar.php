<!--Menu connecté-->

<?php
if (isset($_SESSION['connected'])) : ?>
    <nav>
        <ul>
            <li><a href="/mvccyber">Home</a></li>
            <li><a href="/mvccyber/roles/all">Afficher Rôles</a></li>
            <li><a href="/mvccyber/roles/add">Ajouter Rôle</a></li>
            <li><a href="/mvccyber/utilisateur/deconnexion">Se deconnecter</a></li>

        </ul>
    </nav>


    <!--Menu visiteur-->
<?php else : ?>
    <nav>
        <ul>
            <li><a href="/mvccyber">Home</a></li>
            <li><a href="/mvccyber/roles/all">Afficher Rôles</a></li>
            <li><a href="/mvccyber/utilisateur/connexion">Se connecter</a></li>
            <li><a href="/mvccyber/utilisateur/add">Inscription</a></li>
        </ul>
    </nav>

<?php endif ?>