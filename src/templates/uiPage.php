<?php
/*
 * Fonction contenant le html de la page Interface utilisateur
 * 
 * return void
*/
function uiPage(): void {
    $title = 'Interface Utilisateur';

    ob_start();
?>
    <main>
        <h1>Interface utilisateur !</h1>
    </main>
<?php
    $content = ob_get_clean();
    require('layout.php');
}
?>