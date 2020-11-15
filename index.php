<?php
include_once('includes/header.html');
?>

<div id="home">
    <div id="home_left">
        <div id="home_left_content">
            <p id="intro" class="home_space">Hello, My Name Is</p>
            <h1 id="name">QUENTIN</h1>
            <h1 id="surname" class="home_space">GUILLOU</h1>

            <div id="job" class="home_space">
                <div id="home_rect"></div>
                <p>Junior full stack developer</p>
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
        <h1>ABOUT ME</h1>
    </div>
    <div id="about_content">
        <div id="about_left">
            <img src="img/portraitdim.jpg" alt="Autre portrait de face de Quentin Guillou">
        </div>
        <div id="about_right">
            <div id="who_am_i">
                <h3>Who am I : </h3>
                <br>
                <p>My name is Quentin Guillou, I'm a french junior
                    developer for now, I am passionnate and dedicated to
                    my work, I have now the basics skills to build operating
                    web applications, websites and softwares.</p>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusm tempor incididunt ut labore et dolore
                    magna aliqua Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit.</p>
            </div>
            <br><br>
            <div id="technologies">
                <h3>The technologies I use :</h3>
                <div id="tech_images">
                    <div class="technologie first_tech">
                        <img src="./img/SkillsSvg/010-github.svg" alt="Github">
                    </div>
                    <div class="technologie">
                        <img src="./img/SkillsSvg/027-php.svg" alt="PHP">
                    </div>
                    <div class="technologie">
                        <img src="./img/SkillsSvg/029-javascript.svg" alt="JAVASCRIPT">
                    </div>
                    <div class="technologie">
                        <img src="./img/SkillsSvg/032-nodejs.svg" alt="NODEJS">
                    </div>
                    <div class="technologie">
                        <img src="./img/SkillsSvg/005-python.svg" alt="PYTHON">
                    </div>
                    <div class="technologie first_tech">
                        <img src="./img/SkillsSvg/021-mysql.svg" alt="MYSQL">
                    </div>
                    <div class="technologie">
                        <img src="./img/SkillsSvg/030-html-5.svg" alt="HTML">
                    </div>
                    <div class="technologie">
                        <img src="./img/SkillsSvg/031-css.svg" alt="CSS">
                    </div>
                    <div class="technologie">
                        <img src="./img/SkillsSvg/003-java.svg" alt="JAVA">
                    </div>
                    <div class="technologie">
                        <img src="./img/SkillsSvg/016-c-1.svg" alt="C++">
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
                <div class="experience-content hidden">
                    <h2>Company</h2>
                    <div class="experience-time">Jan - Jun 2016</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias debitis praesentium itaque veniam dolorum cupiditate asperiores optio beatae, qui perferendis ipsam odit modi nemo natus corrupti neque quos distinctio facilis?</p>
                </div>
            </li>
            <li>
                <div class="experience-content hidden">
                    <h2>Company</h2>
                    <div class="experience-time">Jul - Dec 2015</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati quas, reiciendis quis sequi voluptatem consectetur adipisci accusamus hic vel vero ea ad iure! Natus, ipsum, enim aspernatur fugit voluptatibus similique?</p>
                </div>
            </li>
            <li>
                <div class="experience-content hidden">
                    <h2>Company</h2>
                    <div class="experience-time">Mar - Jun 2015</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati quas, reiciendis quis sequi voluptatem consectetur adipisci accusamus hic vel vero ea ad iure! Natus, ipsum, enim aspernatur fugit voluptatibus similique?</p>
                </div>
            </li>
        </ul>
    </div>
</section>
<section id="skills" class="skills">
    <div id="about_title">
        <div id="skills_title_rect" class="rect_style"></div>
        <h1>MY DEV. SKILLS</h1>
    </div>
    <div class="content">
    <div class="development-wrapper">
      <ul class="skills-bar-container">
        <li>
          <div class="progressbar-title">
            <h3>HTML5</h3>
            <span class="percent" id="html-pourcent"></span>
          </div>
          <div class="bar-container" data-percent="95">
            <span class="progressbar" id="progress-html"></span>
          </div>
        </li>
        <li>
          <div class="progressbar-title">
            <h3>CSS / SASS</h3>
            <span class="percent" id="css-pourcent"></span>
          </div>
          <div class="bar-container" data-percent="85">
            <span class="progressbar" id="progress-css"></span>
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
            <h3>PHP</h3>
            <span class="percent" id="php-pourcent"></span>
          </div>
          <div class="bar-container" data-percent="65">
            <span class="progressbar" id="progress-php"></span>
          </div>
        </li>
        <li>
          <div class="progressbar-title">
            <h3>AngularJS</h3>
            <span class="percent" id="angular-pourcent"></span>
          </div>
          <div class="bar-container" data-percent="70">
            <span class="progressbar" id="progress-angular"></span>
          </div>
        </li>
      </ul>
    </div>
</section>
<div id="projects">
    <div id="about_title">
        <div id="projects_title_rect" class="rect_style"></div>
        <h1>MY PROJECTS</h1>
    </div>
</div>
<div id="contact">
    <div id="about_title">
        <div id="contact_title_rect" class="rect_style"></div>
        <h1>CONTACT ME</h1>
    </div>
</div>

<?php
include_once('includes/footer.html');
?>