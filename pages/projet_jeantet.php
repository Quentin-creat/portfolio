<?php
$titre = 'Projet Jeantet Quentin Guillou, développeur Full-Stack Junior';
$metaDescription = 'Cette page de ce portfolio décrit le projet de refonte des sites du groupe Jeantet effectué en entreprise. Il s\'agit d\'un site vitrine effectuer avec wordpress ainsi qu\'un thème développer par mes soins';
include_once('../includes/header.php');
?>

<div id="project_content">
    <div id="project_img">
        <img src="../img/projects/projectsTech/wordpress.svg">
    </div>
    <div id="project_text_content" class="project_wordpress">
        <h1>Jeantet Élastomères</h1>

        <p>Ce projet consistait en une refonte globale des sites du groupe Jeantet, donc 3 sites au total.
            Le groupe Jeantet est un groupe spécialisé dans la manipulation des élastomères, il compte parmis
            ces partenaire <a href="www.jeantet.com">Jeantet</a>, spécialiste du moulage caoutchouc, 
            conception caoutchouc et dessin industriel; <a href="www.perrot.fr">Perrot</a>, 
            spécialiste du moulage caoutchouc et <a href="www.ixemer.com">Ixemer</a> spécialisé dans la plasturgie.
            Ce groupe a toujours été présent sur Internet pour trouver de nouveaux clients, le nom de domaine 
            "jeantet.com" a été acheté en 1997. Au cours de cette mission, nous avons donc travailler en étroite
            collaboration avec <a href="https://www.cybercite.fr/">CyberCité</a>, le référenceur de l'entreprise. En effet
            le but de cette refonte était d'améliorer le référencement naturel (SEO) du groupe.
            <br><br>
            Pour cette mission j'ai endossé le rôle d'un chef de projet) car j'étais la plupart du temps seul
            à travailler sur les sites, même si un collègue ayant de l'expérience dans les projets web
            m'assistait lorsque j'étais confronté à divers problèmes techniques. J'ai développé un thème wordpress pour le groupe Jeantet que 
            nous avons par la suite appliquer au trois sites. 
            J'ai également dû :<br>
            - Étudier le SEO pour optimiser nos résultats.<br>
            - Effectuer des sauvegardes des bases de données et des fichiers wordpress en cas de problème.<br>
            - Fournir un plan de reprise d'activité si un problème devait survenir après mon départ dans l'entreprise.<br>
            - Gérer mon Versionning grâce à Git et Github, pour garder une trace de mon code.
        </p>
    </div>
</div>

<?php
include_once('../includes/footer.html');
?>
