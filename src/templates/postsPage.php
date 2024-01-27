<?php
/*
 * Fonction contenant le html de la page Postes
 * 
 * return void
*/
function postsPage(): void {
    $title = 'Postes';

    ob_start();
?>
    <main>
        <h1>Page des posts !</h1>
    </main>
<?php
    $content = ob_get_clean();
    require('layout.php');
}
?>