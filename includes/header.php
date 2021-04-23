<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php
        if (isset($metaDescription) && $metaDescription != '') {
            echo $metaDescription;
        } else {
            echo 'Bonjour et bienvenue sur le portfolio de Quentin Guillou, alternant développeur, développeur full-Stack Junior. Employé motivé et passionné, faisant preuve d\'esprit d\'équipe
                        tout en étant parfaitement autonome.';
}
        ?>" >
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <link rel="stylesheet" href="../styles/styles.css">
        <link rel="stylesheet" media="screen and (max-width: 1415px)" href="../styles/portable_res.css" />
        <link rel="stylesheet" media="screen and (max-width: 1100px)" href="../styles/mobile_grande_res.css" />
        <link rel="stylesheet" media="screen and (max-width: 780px)" href="../styles/mobile_res.css" />
        <link rel="stylesheet" media="screen and (max-width: 655px)" href="../styles/mobile_petite_res.css" />
        <title><?php
            if (isset($titre) && $titre != '') {
                echo $titre;
            } else {
                echo 'Portfolio de Quentin Guillou, apprenti developpeur Full-Stack';
            }
            ?></title>
        <link rel="shortcut icon" href="../img/favicon/favicon.png" type="images/x-icon" />  
        <script type="text/javascript" src="../js/jquery-3.5.1.min.js"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-TRGWXY5Y4W"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-TRGWXY5Y4W');
        </script>


    </head>

    <body>
        <div id="header">
            <nav>
                <ol>
                    <li class="left">
                        <a href="../#">Accueil</a>
                    </li>
                </ol>


                <ul class="right hamburger-menu">
                    <li>
                        <a class="navBtn" href="../#about">À&#127;propos</a>
                    </li>
                    <li>
                        <a class="navBtn" href="../#experience">Experiences</a>
                    </li>
                    <li>
                        <a class="navBtn" href="../#skills">Compétences</a>
                    </li>
                    <li>
                        <a class="navBtn" href="../#projects">Projets</a>
                    </li>
                    <li id="certificationsMenu">
                        <a class="navBtn" href="../#certifications">Certifications</a>
                    </li>
                    <li>
                        <a class="navBtn" href="../#contact">Me&#127;contacter</a>
                    </li>
                </ul>
            </nav>
            <div class="menu-wrapper toOpen">☰</div>
        </div>