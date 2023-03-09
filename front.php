<div class="wrapper">
<@ elements/header.php @>
    <section id="intro" class="hero section">
        <div class="hero-body has-text-centered">
            <div class="container">
                <h1 id="introduction" class="title is-4">Hi, my name is</h1>
                <h1 id="name" class="title is-1" style="font-size: 0;">
                    <span class="letter">A</span>
                    <span class="letter">l</span>
                    <span class="letter">e</span>
                    <span class="letter">x</span>
                    <span class="letter space">&nbsp;</span>
                    <span class="letter">B</span>
                    <span class="letter">r</span>
                    <span class="letter">a</span>
                    <span class="letter">c</span>
                    <span class="letter">k</span>
                    <span class="letter">e</span>
                    <span class="letter">n</span>
                </h1>
                <p id="subhead" class="subtitle is-5">I'm a graphic designer, journalist, and web developer based in Indiana.</p>
                <div class="navigation">
                    <ul>
                        <@ newPagelist { type: 'children'} @>
                        <@ foreach in pagelist @>
                            <li><a href="@{ url }" class="link">@{ title }</a></li>
                        <@ end @>
                    </ul>
                </div>
            </div>
        </div>
    </section>


<@ newPagelist{
    type: 'children',
    filter: '@{?filter}',
    context: '/work'
} @>

<div class="post-grid-container section">
    <@ elements/post-grid.php @>
</div>
</div>
<@ elements/footer.php @>