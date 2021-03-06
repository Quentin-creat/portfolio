<?php
include_once('../includes/header.html');
?>

<div id="project_content">
    <div id="project_img">
        <img src="../img/projects/projectsTech/node.svg">
    </div>
    <div id="project_text_content" class="project_node">
        <h1>Secret Santa</h1>

        <p>Ce projet en est un personnel baptisé "Secret Santa" ayant pour but de gérer le concept du 
            Secret Santa lors de Noël.
            <bold>Concept : </bold>  à l’aide d’un tirage au sort, chaque personne d’un groupe 
            est désignée pour faire un cadeau secret à une autre. Par exemple, vous tirez le nom 
            de votre collègue de la comptabilité, mais vous ne savez pas qui a tiré le vôtre ! 
            Vous devez donc trouver un cadeau pour cette personne, ce qui vous incitera sans doute à 
            essayer d’en savoir un peu plus sur ses goûts, ses passions et son mode de vie. Généralement, 
            une limite est fixée pour le budget, afin que tout le monde puisse faire des cadeaux équitables.
            L'inconvénient est donc qu'une personne doit se "sacrifier" pour administrer le tout.
            Cette application à pour but de gérer cette tradition sans que personne n'ait à gâcher
            sa surprise.
            <br><br>
            L'application présente donc une fonction de connexion et d'inscription mais également de créations
            de groupe, d'invitation aux groupe et de distributions de cadeaux.
            Cette application est faite en NodeJS notamment grâce à Express.
            Lors de la réalisation de ce projet, j'ai été amené à : <br>
            - Réaliser un Modèle Conceptuel des données pour la base de données.
            - Mettre en place un serveur Web avec NGinx, NodeJS et MySQL.
            - Développer l'application (front-end et back-end).
        </p>
    </div>
</div>

<?php
include_once('../includes/footer.html');
?>