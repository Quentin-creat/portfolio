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
                <div class="cv">
                    <a href="./index?action=voirCV" class="liencv">Télécharger mon CV</a>
                </div>
            </div>
        </div>

        <div id="home_right">
            <img src="img/portraits/home_picture.png" alt="Portrait de face de Quentin Guillou">
        </div>
    </div>
    <section id="about">
        <div id="about_title">
            <div id="about_title_rect" class="rect_style"></div>
            <h2>À PROPOS</h2>
        </div>
        <div id="about_content">
            <div id="about_left">
                <img src="img/portraits/about_picture.png" alt="Autre portrait de face de Quentin Guillou">
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
                            <img src="./img/SkillsSvg/visual-studio-code.svg" alt="Logo de l'IDE Visual studio code">
                        </div>
                        <div class="technologie first_tech">
                            <img src="./img/SkillsSvg/git.svg" alt="Logo du logiciel de gestion de version Git">
                        </div>
                        <div class="technologie">
                            <img src="./img/SkillsSvg/github.svg" alt="Logo de la plateforme GitHub">
                        </div>
                        <div class="technologie first_tech">
                            <img src="./img/SkillsSvg/sql.svg" alt="Logo du langage SQL">
                        </div>
                        <div class="technologie">
                            <img src="./img/SkillsSvg/wordpress.svg" alt="Logo de Wordpress">
                        </div>
                        <div class="technologie">
                            <img src="./img/SkillsSvg/netbeans.png" alt="Logo de netbeans">
                        </div>
                        <div class="technologie">
                            <img src="./img/SkillsSvg/trello.svg" alt="Logo de MySql WorkBench">
                        </div>
                        <div class="technologie">
                            <img src="./img/SkillsSvg/affinity.svg" alt="Logo de MySql WorkBench">
                        </div>
                        <div class="technologie">
                            <img src="./img/SkillsSvg/figma.svg" alt="Logo de MySql WorkBench">
                        </div>
                        <div class="technologie">
                            <img src="./img/SkillsSvg/mysql.svg" alt="Logo de MySql WorkBench">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="experience" class="experience">
        <div class="content">
            <div id="about_title">
                <div id="experience_title_rect" class="rect_style"></div>
                <h2>EXPERIENCE</h2>
            </div>
            <ul>
                <li>
                    <div class="experience-content exp-droite">
                        <h2>Jeantet Élastomères</h2>
                        <div class="experience-time">2019 - 2020</div>
                        <p>Pendant cette alternance en parrallèle de ma formation au lycée Bonaparte, j'ai porté différentes casquettes telles que : Assistant du gestionnaire du parc informatique, et chef de projet sur la refonte des sites du groupe Jeantet.</p>
                    </div>
                </li>
                <li>
                    <div class="experience-content exp-gauche">
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
        <div class="hardskills">
            <div id="about_title">
                <div id="skills_title_rect" class="rect_style"></div>
                <h2>HARD SKILLS</h2>
            </div>
            <div class="content">
                <div class="development-wrapper">
                    <ul class="skills-bar-container">
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
                                <h3>HTML/CSS</h3>
                                <span class="percent" id="html-pourcent"></span>
                            </div>
                            <div class="bar-container" data-percent="85">
                                <span class="progressbar" id="progress-html"></span>
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
                        <li>
                            <div class="progressbar-title">
                                <h3>WordPress</h3>
                                <span class="percent" id="angular-pourcent"></span>
                            </div>
                            <div class="bar-container" data-percent="85">
                                <span class="progressbar" id="progress-angular"></span>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="softskills">
                <div id="about_title">
                    <div id="skills_title_rect" class="rect_style"></div>
                    <h2>SOFT SKILLS</h2>
                </div>
                <div class="content">
                    <div class="development-wrapper">
                        <ul class="skills-bar-container soft-skills">
                            <div class="soft-skills_puces">
                                <li class="softskills">- Esprit d'équipe</li>
                                <li class="softskills">- Autonomie</li>
                                <li class="softskills">- À l'écoute</li>
                            </div>

                        </ul>
                    </div>
                </div>
    </section>
    <section id="projects">
        <div id="about_title">
            <div id="projects_title_rect" class="rect_style"></div>
            <h2>MES PROJETS</h2>
        </div>
        <div id="projects_content">

            <div class="card">
                <div class="header">
                    <div class="top">
                        <img src="./img/projects/projectsTech/wordpress.svg" alt="Logo de Wordpress">
                        <h4>Jeantet Élastomères</h4>
                    </div>
                    <p class="titre">Refonte des sites du groupe Jeantet</p>
                </div>
                <div class="content">
                    <p class="date">2019 - 2021</p>
                    <div class="image">
                        <img src="./img/projects/projectsScreen/jeantet.png" alt="une image">
                    </div>
                </div>
                <div class="detail">
                    <a href="./pages/projet_jeantet.php">Voir détails</a>
                </div>
            </div>

            <div class="card">
                <div class="header">
                    <div class="top">
                        <img src="./img/projects/projectsTech/php.svg" alt="Logo de PHP">
                        <h4>GSB</h4>
                    </div>
                    <p class="titre">Application gérant le suivi de remboursement de visiteurs médical</p>
                </div>
                <div class="content">
                    <p class="date">2020 - 2021</p>
                    <div class="image">
                        <img src="./img/projects/projectsScreen/gsb.png" alt="une image">
                    </div>
                </div>
                <div class="detail">
                    <a href="./pages/projet_gsb.php">Voir détails</a>
                </div>
            </div>

            <div class="card">
                <div class="header">
                    <div class="top">
                        <img src="./img/projects/projectsTech/symfony.svg" alt="Logo de Symfony">
                        <h4>Maison Des Ligues </h4>
                    </div>
                    <p class="titre">Application symfony gérant l'inscription de licenciés d'escrime</p>
                </div>
                <div class="content">
                    <p class="date">2020 - 2021</p>
                    <div class="image">
                        <img src="./img/projects/projectsScreen/MDL.png" alt="une image">
                    </div>
                </div>
                <div class="detail">
                    <a href="./pages/projet_mdl.php">Voir détails</a>
                </div>
            </div>

            <div class="card">
                <div class="header">
                    <div class="top">
                        <img src="./img/projects/projectsTech/nodejs.svg" alt="Logo de NodeJS">
                        <h4>SECRET SANTA</h4>
                    </div>
                    <p class="titre">Une application web gérant le concept du secret santa</p>
                </div>
                <div class="content">
                    <p class="date">2019 - ...</p>
                    <div class="image">
                        <img src="./img/projects/projectsScreen/secretSanta.png" alt="une image">
                    </div>
                </div>
                <div class="detail">
                    <a href="./pages/projet_secretsanta.php">Voir détails</a>
                </div>
            </div>
        </div>
    </section>
    <section id="certifications">
        <div id="about_title">
            <div id="contact_title_rect" class="rect_style"></div>
            <h2>CERTIFICATIONS</h2>
        </div>
        <div id="certifSlider">
            <!-- Slider main container -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="./img/certifications/NodeFullStackCertification.png" alt="Certification Open Classroom NodeJS, express, mongoDB"></div>
                    <div class="swiper-slide"><img src="./img/certifications/PHPMYSQLCertification.png" alt="Certification Open Classroom PHP et MySQL"></div>
                    <div class="swiper-slide"><img src="./img/certifications/GitCertification.png" alt="Certification Open Classroom utilisation Git et Github"></div>
                    <div class="swiper-slide"><img src="./img/certifications/materialDesignCertification.png" alt="Certification Open Classroom material Design"></div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

            <script>
                var swiper = new Swiper('.swiper-container', {
                    loop: true,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                });
            </script>
        </div>
    </section>
    <section id="contact">
        <div id="about_title">
            <div id="contact_title_rect" class="rect_style"></div>
            <h2>ME CONTACTER</h2>
        </div>

        <div id="form_contact">
            <form action="index.php?action=sendMail" method="POST">
                <div>
                    <div id="intro">
                        <h3>Prendre contact :</h3>

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
                            <textarea id="email_content" name="content" required placeholder="Message" rows="13" cols="70" value="message test"></textarea>
                        </div>
                        <div class="g-recaptcha" data-sitekey="6Ldgv24aAAAAAGiqz0nwViDk8rvSK5QWKB1Ai96X">
                        </div>

                        <?php

                        if (isset($_GET['action']) && !empty($_GET['action'])) {
                            if ($_GET['action'] === 'successMail') {
                                echo '<p class="mailMessage" id="success">Votre message à bien été envoyé</p>';
                            } else {
                                echo '<p class="mailMessage" id="error">Erreur, votre message n\'a pas pu être envoyé !</p>';
                            }
                        }

                        ?>
                    </div>
                </div>
                <button>Envoyer</button>
                <a href="mailto:quentin.guillou.var@gmail.com">quentin.guillou.var@gmail.com</a>
            </form>
        </div>

    </section>
</div>
<?php
include_once('includes/footer.html');
?>