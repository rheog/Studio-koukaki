// Attend que le document soit complètement chargé
document.addEventListener("DOMContentLoaded", function () {
    // Sélectionnez l'élément à animer
    var elementToAnimate = document.querySelector(".fade-in");

    // Vérifiez si l'élément existe
    if (elementToAnimate) {
        // Ajoutez la classe pour déclencher l'animation
        elementToAnimate.classList.add("fade-in-animation");
    }
});

/* parallax+css*/
const parallax = document.querySelector('.parallax');
const video = document.querySelector('.parallax video');
const logo = document.querySelector('.parallax img');

window.addEventListener('scroll', () => {
    const scrollValue = window.scrollY;
    const videoPosition = scrollValue * 0.5;
    const logoPosition = -scrollValue * 0.5;

    video.style.transform = `translateY(${videoPosition}px)`;
    logo.style.transform = `translateY(${logoPosition}px)`;
});

/*coverflow*/




/*animations des 2 nuages*/
const bigCloud = document.querySelector('.big-cloud');
const littleCloud = document.querySelector('.little-cloud');

const animateCloudsOnScroll = () => {
    const scrollPosition = window.scrollY;

    const bigCloudTop = bigCloud.getBoundingClientRect().top + scrollPosition;
    const littleCloudTop = littleCloud.getBoundingClientRect().top + scrollPosition;

    if (bigCloudTop < window.innerHeight) {
        bigCloud.classList.add('animate');
    } else {
        bigCloud.classList.remove('animate');
    }

    if (littleCloudTop < window.innerHeight) {
        littleCloud.classList.add('animate');
    } else {
        littleCloud.classList.remove('animate');
    }
};

window.addEventListener('scroll', animateCloudsOnScroll);

/******* burger menu********/

let hamburger = document.querySelector('#hamburger');
let menu = document.querySelector('.navbar');
let bod = document.querySelector('.container-1');

hamburger.addEventListener('click', function () {
    hamburger.classList.toggle('isactive');
    menu.classList.toggle('active');
});
