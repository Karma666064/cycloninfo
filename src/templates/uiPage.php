<?php
function uiPage() {
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