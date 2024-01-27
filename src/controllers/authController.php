<?php
/*
 * Fonction pour afficher la page d'authenfication et pour gérer les information des formulaires de connexion et d'inscription
 * 
 * @param string $activate
 * 
 * @return void
*/
function showAuth(string $activate): void {
    global $base_url;
    global $isConnected;

    if (!$isConnected) {
        // Si formtype = register-post
        if ($_POST && $_POST['formType'] == 'register-post' && $_POST['username'] && $_POST['mail'] && $_POST['password']) {
            $pseudonyme = $_POST['pseudonyme'];
            if (!$_POST['pseudonyme']) $pseudonyme = $_POST['username'];

            $registered = register(strtolower($_POST['username']), $pseudonyme, $_POST['mail'], $_POST['password']);

            if ($registered) header("location: $base_url?page=home");
            else {
                authPage($activate);
                echo '<p class="msg error">Une erreur est survenu lors de l\'enregistrement !</p>';
            }
        }
        // Si formtype = login-post
        if ($_POST && $_POST['formType'] == 'login-post' && $_POST['username'] && $_POST['password']) {
            $connected = login($_POST['username'], $_POST['password']);

            if ($connected) header("Location: $base_url?page=home");
            else {
                authPage($activate);
                echo '<p class="msg error">Mauvais identifiant !</p>';
            }
        } else authPage($activate);

    } else {
        authPage($activate);
        echo '<p class="msg warning">Vous etes déjà connecter !</p>';
    }

    authPage($activate);
}
?>