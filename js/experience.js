let ExperienceObserver = new IntersectionObserver(function (observables) {

    observables.forEach(function (observable) {

        if (observable.intersectionRatio > 0.5) {
            observable.target.classList.remove('not-visible')
        } else {
            observable.target.classList.add('not-visible')
        }
    })

}, {

    threshold: [0.5]

})

let experiences = document.querySelectorAll('.experience-content')

experiences.forEach(function (experience) {

    experience.classList.add('not-visible')
    ExperienceObserver.observe(experience)

})


let skillsObserver = new IntersectionObserver(function (observables) {

    observables.forEach(function (observable) {

        $(document).ready(function () {
            // Main variables
            var $developmentWrapper = $('.development-wrapper');
            var developmentIsVisible = false;


            /* ####### HERO SECTION ####### */

            $('.hero .content .header').delay(500).animate({
                'opacity': '1',
                'top': '50%'
            }, 1000);


            $(window).scroll(function () {

                var bottom_of_window = $(window).scrollTop() + $(window).height();
                /*###### SKILLS SECTION ######*/

                var middle_of_developmentWrapper = $developmentWrapper.offset().top + $developmentWrapper.outerHeight() / 2;

                if ((bottom_of_window > middle_of_developmentWrapper) && (developmentIsVisible == false)) {

                    $('.skills-bar-container li').each(function () {

                        var $barContainer = $(this).find('.bar-container');
                        var dataPercent = parseInt($barContainer.data('percent'));
                        var elem = $(this).find('.progressbar');
                        var percent = $(this).find('.percent');
                        var width = 0;

                        var id = setInterval(frame, 15);

                        function frame() {
                            if (width >= dataPercent) {
                                clearInterval(id);
                            } else {
                                width++;
                                elem.css("width", width + "%");
                                percent.html(width + " %");
                            }
                        }
                    });
                    developmentIsVisible = true;
                }

            }); // -- End window scroll --
        });

    })

}, {
})

let skills = document.querySelectorAll('.skills')

skills.forEach(function (skill) {

    skillsObserver.observe(skill)

})