<?php
include_once('includes/header.html');
?>

<div id="index">
    <div id="home">
        <div id="home_left">
            <div id="home_left_content">
                <p id="intro" class="home_space">Bonjour, je m'appelle</p>
                <h1 id="name">QUENTIN</h1>
                <h1 id="surname" class="home_space">GUILLOU</h1>

                <div id="job" class="home_space">
                    <div id="home_rect"></div>
                    <p>Développeur junior full stack</p>
                </div>
            </div>
        </div>

        <div id="home_right">
            <img src="img/portraitdimret.png" alt="Portrait de face de Quentin Guillou">
        </div>
    </div>
    <div id="about">
        <div id="about_title">
            <div id="about_title_rect" class="rect_style"></div>
            <h1>À PROPOS</h1>
        </div>
        <div id="about_content">
            <div id="about_left">
                <img src="img/portraitdim.jpg" alt="Autre portrait de face de Quentin Guillou">
            </div>
            <div id="about_right">
                <div id="who_am_i">
                    <h3>En quelques mots : </h3>
                    <br>
                    <p> Je m'appelle Quentin Guillou, je suis un développeur
                        junior pour le moment, et j'aspire à devenir développeur full stack.
                        Je suis passionné et dédié à mon travail et je possède maintenant
                        les compétences basiques permettant de créer des applications web fonctionnels
                        ainsi que des site web ou des logiciels.
                    </p>
                    <br>
                    <p>Employé motivé et passionné, faisant preuve d'esprit d'équipe 
                    tout en étant parfaitement autonome.
                    </p>
                </div>
                <br><br>
                <div id="technologies">
                    <h3>Mes outils :</h3>
                    <div id="tech_images">
                        <div class="technologie">
                            <img src="./img/SkillsSvg/visual-studio-code.png" alt="Logo de l'IDE Visual studio code">
                        </div>
                        <div class="technologie first_tech">
                            <img src="./img/SkillsSvg/git.png" alt="Logo du logiciel de gestion de version Git">
                        </div>
                        <div class="technologie">
                            <img src="./img/SkillsSvg/010-github.svg" alt="Logo de la plateforme GitHub">
                        </div>
                        <div class="technologie first_tech">
                            <img src="./img/SkillsSvg/sql.jpg" alt="Logo du langage SQL">
                        </div>
                        <div class="technologie">
                            <img src="./img/SkillsSvg/mysql-workbench.jpg" alt="Logo de MySql WorkBench">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="experience" class="experience">
        <div class="content">
            <div id="about_title">
                <div id="experience_title_rect" class="rect_style"></div>
                <h1>EXPERIENCE</h1>
            </div>
            <ul>
                <li>
                    <div class="experience-content exp-gauche">
                        <h2>Jeantet Élastomères</h2>
                        <div class="experience-time">2019 - 2020</div>
                        <p>Pendant cette alternance en parrallèle de ma formation au lycée Bonaparte, j'ai porté différentes casquettes telles que : Assistant du gestionnaire du parc informatique, et chef de projet sur la refonte des sites du groupe Jeantet.</p>
                    </div>
                </li>
                <li>
                    <div class="experience-content exp-droite">
                        <h2>UFA Lycée Bonaparte</h2>
                        <div class="experience-time">2019 - 2021</div>
                        <p>Durant cette période, j'ai étudié pour obtenir mon BTS Sio option SLAM (Solution logiciel et applications métier). J'ai ainsi pu apprendre des bases solides de programmation dans diverses domaines d'applications.</p>
                    </div>
                </li>
                <li>
                    <div class="experience-content exp-droite">
                        <h2>Université de Toulon</h2>
                        <div class="experience-time">2018 - 2019</div>
                        <p>Cette année à l'université de Toulon en L1 informatique m'a permis de consolider les bases fragile de programmation que j'avais acquéris en autodidacte grâce à Internet (OpenClassroom, Udemy, Youtube).</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section id="skills" class="skills">
        <div id="about_title">
            <div id="skills_title_rect" class="rect_style"></div>
            <h1>MES COMPETENCES</h1>
        </div>
        <div class="content">
            <div class="development-wrapper">
                <ul class="skills-bar-container">
                    <li>
                        <div class="progressbar-title">
                            <h3>HTML/CSS</h3>
                            <span class="percent" id="html-pourcent"></span>
                        </div>
                        <div class="bar-container" data-percent="80">
                            <span class="progressbar" id="progress-html"></span>
                        </div>
                    </li>
                    <li>
                        <div class="progressbar-title">
                            <h3>PHP</h3>
                            <span class="percent" id="php-pourcent"></span>
                        </div>
                        <div class="bar-container" data-percent="90">
                            <span class="progressbar" id="progress-php"></span>
                        </div>
                    </li>
                    <li>
                        <div class="progressbar-title">
                            <h3>NodeJS</h3>
                            <span class="percent" id="angular-pourcent"></span>
                        </div>
                        <div class="bar-container" data-percent="85">
                            <span class="progressbar" id="progress-angular"></span>
                        </div>
                    </li>
                    <li>
                        <div class="progressbar-title">
                            <h3>WordPress</h3>
                            <span class="percent" id="angular-pourcent"></span>
                        </div>
                        <div class="bar-container" data-percent="85">
                            <span class="progressbar" id="progress-angular"></span>
                        </div>
                    </li>
                    <li>
                        <div class="progressbar-title">
                            <h3>JavaScript / jQuery</h3>
                            <span class="percent" id="javascript-pourcent"></span>
                        </div>
                        <div class="bar-container" data-percent="80">
                            <span class="progressbar" id="progress-javascript"></span>
                        </div>
                    </li>
                </ul>
            </div>
    </section>
    <div id="projects">
        <div id="about_title">
            <div id="projects_title_rect" class="rect_style"></div>
            <h1>MES PROJETS</h1>
        </div>
        <div id="projects_content">
            <div class="card" style="width: 18rem;">
                <img src="./img/ProjectsPictures/nodejs.svg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="../index.php?action=projet-nodeJS" class="btn btn-primary">Détails</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="./img/ProjectsPictures/wordpress.svg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="../index.php?action=projet-wordpress" class="btn btn-primary">Détails</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="./img/ProjectsPictures/unreal.svg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="../index.php?action=projet-unrealEngine" class="btn btn-primary">Détails</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="./img/ProjectsPictures/nodejs.svg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="../index.php?action=projet-nodeJS" class="btn btn-primary">Détails</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="./img/ProjectsPictures/wordpress.svg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="../index.php?action=projet-wordpress" class="btn btn-primary">Détails</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="./img/ProjectsPictures/unreal.svg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="../index.php?action=projet-unrealEngine" class="btn btn-primary">Détails</a>
                </div>
            </div>
        </div>
    </div>
    <div id="contact">
        <div id="about_title">
            <div id="contact_title_rect" class="rect_style"></div>
            <h1>ME CONTACTER</h1>
        </div>

        <div id="form_contact">
            <form action="index.php?action=sendMail" method="POST">
                <div>
                    <div id="intro">
                        <h3>Prendre contact :</h3>
                        <?php

                            if (isset($_GET['action']) && !empty($_GET['action'])) {
                                if ($_GET['action'] === 'successMail') {
                                    echo '<p class="mailMessage" id="success">Votre message à bien été envoyé</p>';
                                } else {
                                    echo '<p class="mailMessage" id="error">Erreur, votre message n\'a pas pu être envoyé !</p>';
                                }
                            }

                        ?>
                        <div class="input">
                            <input type="text" id="name" name="name" required placeholder="Name" value="quentin">
                        </div>
                        <div class="input">
                            <input type="tel" id="phone" name="phone" placeholder="Phone" value="0646581005">
                        </div>
                        <div class="input">
                            <input type="email" id="email" name="email" required placeholder="Email" value="quentin@example.com">
                        </div>
                        <div class="input">
                            <input type="text" id="subject" name="subject" required placeholder="Subject" value="sujet">
                        </div>
                    </div>
                    <div id="content">
                        <div class="input">
                            <textarea id="email_content" name="content" required placeholder="Message" rows="14" cols="30" value="message test"></textarea>
                        </div>
                        <div class="g-recaptcha" data-sitekey="6Ldgv24aAAAAAGiqz0nwViDk8rvSK5QWKB1Ai96X">

                        </div>
                    </div>
                </div>
                <button>Envoyer</button>
                <a href="mailto:quentin.guillou.var@gmail.com">quentin.guillou.var@gmail.com</a>
            </form>
        </div>

    </div>
</div>
<?php
include_once('includes/footer.html');
?>