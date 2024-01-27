<?php
/*
 * Fichier qui gere le routage des pages
*/

require_once('autoload.php');

if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'login':
            showAuth('login');
            break;
        case 'register':
            showAuth('register');
            break;
        case 'logout':
            logout();
            break;
        case 'details':
            showDetails();
            break;
        case 'posts':
            showPosts();
            break;
        case 'ui':
            showUi();
            break;
        default:
            showHome(); 
            break;
    }
} else showHome();
?>