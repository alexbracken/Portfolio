<@ elements/header.php @>
<div class="wrapper">
    <@ elements/navbar.php @>
    <script>
        window.onload = function () {
        if (sessionStorage.getItem("aboutAnimationHasPlayed") === null) {
            var loadAnimation = gsap.fromTo(".letter", {y: 30, opacity: 0}, {y: 0, opacity: 1, stagger: 0.05, ease: "elastic", duration: 2, delay: 0.5});
            loadAnimation.play()
            sessionStorage.setItem("aboutAnimationHasPlayed", true);
        }
    }
    </script>
    <div class="container">
        <section class="about section">
            <h1 id="name" class="title is-1" style="font-size: 0;">
                <span class="letter">A</span>
                <span class="letter">b</span>
                <span class="letter">o</span>
                <span class="letter">u</span>
                <span class="letter">t</span>
            </h1>
        </section>
        <section class="section content">
            @{ textAbout }
            <p>Want to talk about a project or opportunity? Hit me up!</p>
        </section>
        <section>
            <@ elements/form.php @>
        </section>
    </div>
</div>
    <@ elements/footer.php @>