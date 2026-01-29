<?php
$pageTitle = "Home";
$currentPage = "home";
?>

<!-- Hero Section -->
<section id="home" class="hero">
    <div class="hero-content">
        <p class="hero-subtitle">Fotografie door Arne Meevis</p>
        <h1 class="hero-title">Waar Licht <span class="accent">Verhalen</span> Vertelt</h1>
        <p style="color: var(--text-color); max-width: 600px; margin: 0 auto 2rem;">Van straatfotografie tot architectuur - elke foto vertelt een uniek verhaal over licht, compositie en het moment.</p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="<?php echo url('portfolio'); ?>" class="btn btn-primary">Bekijk mijn werk</a>
            <a href="#over" class="btn btn-secondary">Over dit project</a>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="over" class="about-section">
    <div class="container">
        <div class="about-content">
            <div class="about-image">
                <img src="images/gallery/crazzzyyyyyyy.PNG" alt="Arne Meevis">
            </div>
            <div class="about-text">
                <p class="section-subtitle">Over Mij</p>
                <h2 class="section-title">Arne Meevis</h2>
                <p>Hey! Ik ben Arne, een passionele fotograaf die de wereld vastlegt door een creatieve lens. Voor mij draait fotografie niet alleen om mooie plaatjes - het gaat om het vangen van emoties, sfeer en verhalen.</p>
                <p>In dit portfolio zie je mijn reis door verschillende stijlen: van intense portretfotografie tot de rust van landschappen en de dynamiek van stedelijke architectuur. Elke foto is een experiment met licht, compositie en perspectief.</p>
                <p style="margin-top: 2rem; padding-top: 2rem; border-top: 1px solid var(--border-color);">
                    <a href="<?php echo url('portfolio'); ?>" style="color: var(--primary-color); text-decoration: none; border-bottom: 1px solid var(--primary-color); padding-bottom: 2px;">Bekijk mijn werk →</a>
                </p>
            </div>
        </div>
    </div>
</section>
