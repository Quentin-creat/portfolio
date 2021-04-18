<?php
$titre = 'Projet MDL Quentin Guillou, développeur Full-Stack Junior';
$metaDescription = 'Cette page de ce portfolio décrit le projet Maison Des Ligues (MDL) effectué en formation. Il s\'agit d\'une application web faite en php grâce à Symfony';
include_once('../includes/header.php');
?>

<div id="project_content">
    <div id="project_img">
        <img src="../img/projects/projectsTech/symfony.svg">
    </div>
    <div id="project_text_content" class="project_unreal">
        <h1>Maison Des Ligues</h1>

        <p>La maison des ligues Lorraine est une structure financée par le Conseil 
            Régional du Grand Est. Elle a pour mission de fournir des espaces et des services aux différentes 
            ligues sportives régionales et à d’autres structures hébergées.
            Le projet MDL est une application web Symfony permettant aux licenciés
d'escrime de s'inscrire à des ateliers.
            <br><br>Pendant ce projet nous avons géré notre Versionning grâce au Workflow <a href="https://www.bing.com/images/search?view=detailV2&ccid=VrJ67R6v&id=4A90C6410C3598825E6CBBFF9CBE5358E304B900&thid=OIP.VrJ67R6vLkwKeT6FLlQlFgHaEj&mediaurl=https%3a%2f%2fcdn-images-1.medium.com%2fmax%2f1600%2f1*9yJY7fyscWFUVRqnx0BM6A.png&exph=860&expw=1400&q=gitflow&simid=608054085133495596&ck=89DFE7ECA64894AB1CC9E3F30CADE786&selectedIndex=0&FORM=IRPRST&ajaxhist=0">GitFlow</a>.
            Les missions étaient par exemple : <br>
            - La mise en place d'un serveur web (debian avec MYSQL, PHP et apache). <br>
            - La conception de la base de données MySQL.
            - Le développement de l'application Symfony.
        </p>
    </div>
</div>

<?php
include_once('../includes/footer.html');
?>