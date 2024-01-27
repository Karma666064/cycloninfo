<?php
/*
 * Fonction contenant le html de la page Authentification
 * 
 * @param string $activate Contient le mot "login" ou "register" pour définir quel formulaire afficher
*/
function authPage(string $activate): void {
    global $baseUrl;
    $title = 'Authentification';

    ob_start();
?>
    <main id="main" class="<?= $activate ?>-active">
        <h1>Page d'authentification !</h1>

        <section class="login">
            <h2>Login</h2>

            <form method="post">
                <div>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="inputUsername">
                </div>

                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="inputPassword">
                </div>

                <input type="hidden" name="formType" value="login-post">

                <input type="submit" value="Connexion">
            </form>

            <a href="<?= $baseUrl ?>?page=register">Register</a>
        </section>

        <section class="register">
            <h2>Register</h2>

            <form method="post">
                <div>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="inputUsername" required>
                </div>

                <div>
                    <label for="pseudonyme">Pseudonyme</label>
                    <input type="text" name="pseudonyme" id="inputPseudonyme">
                </div>

                <div>
                    <label for="mail">Mail</label>
                    <input type="email" name="mail" id="inputMail" required>
                </div>

                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="inputPassword" required>
                </div>

                <input type="hidden" name="formType" value="register-post">

                <input type="submit" value="S'enregistré">
            </form>

            <a href="<?= $baseUrl ?>?page=login">Login</a>
        </section>
    </main>
<?php
    $content = ob_get_clean();
    require('layout.php');
}
?>