<?php
/*
 * Fonction contenant le html de la page Détails
 * 
 * return void
*/
function detailsPage(): void {
    $title = 'Détails du Cyclone';

    ob_start();
?>
    <main>
        <h1>Details sur le cyclone !</h1>
    </main>
<?php
    $content = ob_get_clean();
    require('layout.php');
}
?>