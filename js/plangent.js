var loadAnimation = gsap.fromTo(".letter", {
    y: 30,
    opacity: 0
}, {
    y: 0,
    opacity: 1,
    stagger: 0.05,
    ease: "elastic",
    duration: 2,
    delay: 0.5
});

window.onload = function() {
    if (sessionStorage.getItem("hasPlayed") === null) {
        loadAnimation.play()
        sessionStorage.setItem("hasPlayed", true);
    }
};


var grid = document.querySelector('.grid');
var msnry;

imagesLoaded(grid, function() {
    // init Isotope after all images have loaded
    msnry = new Masonry(grid, {
        itemSelector: '.grid-item',
        columnWidth: '.grid-sizer',
        percentPosition: true
    });
});



document.addEventListener('DOMContentLoaded', () => {

    // Get all "navbar-burger" elements
    const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
  
    // Add a click event on each of them
    $navbarBurgers.forEach( el => {
      el.addEventListener('click', () => {
  
        // Get the target from the "data-target" attribute
        const target = el.dataset.target;
        const $target = document.getElementById(target);
  
        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
        el.classList.toggle('is-active');
        $target.classList.toggle('is-active');
  
      });
    });
  
  });