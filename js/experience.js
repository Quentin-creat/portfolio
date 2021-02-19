let observer = new IntersectionObserver(function (observables) {

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
    observer.observe(experience)

})


