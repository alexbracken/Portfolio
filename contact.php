<@ elements/header.php @>
<div class="wrapper">
<@ elements/navbar.php @>

<script>
    window.onload = function () {
    if (sessionStorage.getItem("contactAnimationHasPlayed") === null) {
        var loadAnimation = gsap.fromTo(".letter", {y: 30, opacity: 0}, {y: 0, opacity: 1, stagger: 0.05, ease: "elastic", duration: 2, delay: 0.5});
        loadAnimation.play()
        sessionStorage.setItem("contactAnimationHasPlayed", true);
    }
}
</script>

<section class="contact section">
    <h1 id="name" class="title is-1" style="font-size: 0;">
        <span class="letter">C</span>
        <span class="letter">o</span>
        <span class="letter">n</span>
        <span class="letter">t</span>
        <span class="letter">a</span>
        <span class="letter">c</span>
        <span class="letter">t</span>
    </h1>
</section>

<@ elements/form.php @>
</div>
<@ elements/footer.php @>