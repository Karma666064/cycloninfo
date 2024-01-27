<?php
/*
 * Fonction contenant le html de la bar de navigation
 * 
 * @return string | false
*/
function navSprite(): string|false { global $baseUrl; ob_start(); ?>
    <nav>
        <ul>
            <li><a href="<?= $baseUrl ?>">Accueil</a></li>
            <li><a href="<?= $baseUrl ?>?page=login">Connexion</a></li>
            <li><a href="<?= $baseUrl ?>?page=register">S'enregistré</a></li>
            <li><a href="<?= $baseUrl ?>?page=logout">Déconnexion</a></li>
            <li><a href="<?= $baseUrl ?>?page=details">Détails du cyclone</a></li>
            <li><a href="<?= $baseUrl ?>?page=posts">Posts</a></li>
            <li><a href="<?= $baseUrl ?>?page=ui">User interface</a></li>
        </ul>
    </nav>
<?php return ob_get_clean(); } ?>