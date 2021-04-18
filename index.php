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
        case 'sendMail':
            include './controller/mail.php';
            break;
        case 'voirCV':
            // Stocker le nom du fichier dans une variable
            $file = './includes/CV2021.pdf';
            // Type de contenu dd l'en-tête
            header('Content-type: application/pdf');
            header('Content-Disposition: inline; filename="' . $file . '"');
            header('Content-Transfer-Encoding: binary');
            header('Accept-Ranges: bytes');
            // Lire le fichier
            @readfile($file);
            break;
        default:
            include('./pages/accueil.php');
    }
} else {
    include('./pages/accueil.php');
}
