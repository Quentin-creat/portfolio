<?php

if (isset($_GET['action'])) {
    $url = $_GET['action'];
    switch ($url) {
        case 'projet-nodeJS':
            include './pages/projet_node.php';
            break;
        case 'projet-wordpress':
            include './pages/projet_wordpress.php';
            break;
        case 'projet-unrealEngine':
            include './pages/projet_unrealEngine.php';
            break;
        default:
            include('./pages/accueil.php');
    }
} else {
    include('./pages/accueil.php');
}
