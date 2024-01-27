<?php
/*
 * Fonction contenant le html de la page Accueil
 * 
 * return void
*/
function homePage(): void {
    global $isConnected;
    $title = 'Accueil';

    ob_start();
?>
    <main>
        <h1>Bienvenue sur cycloninfo !</h1>

        <?php if ($isConnected) echo "T'es connecté {$_SESSION['user']['pseudonyme']}" ?>
    </main>
<?php
    $content = ob_get_clean();
    require('layout.php');
}
?>