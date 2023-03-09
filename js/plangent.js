// Play header animation on page load
window.addEventListener('load', function(){
    TweenLite.to(".letter", {visibility: "visible"});
    // If animation has played during session, don't play again
    if (sessionStorage.getItem("nameAnimationHasPlayed") === null) {
        // define animation timeline
        var loadAnimation = gsap.fromTo(".letter", {y: 30, opacity: 0}, {y: 0, opacity: 1, stagger: 0.05, ease: "elastic", duration: 2, delay: 0.5});
        
        loadAnimation.play() // play animation
        sessionStorage.setItem("nameAnimationHasPlayed", true); // store value
    }
});



// Initialize scripts on DOM load
document.addEventListener('DOMContentLoaded', function(){
    const body = document.getElementsByTagName('body');
    if (body.hasClass('.front')){
        var grid = document.querySelector('.grid');
        
        // Masonry options
        var msnry = new Masonry(grid, {
            itemSelector: '.grid-item',
            columnWidth: '.grid-sizer',
            percentPosition: true
        });

        imagesLoaded( grid ).on( 'progress', function() {
            // layout Masonry after each image loads
            msnry.layout();
        });
    };

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

}, false)