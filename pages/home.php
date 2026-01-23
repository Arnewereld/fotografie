<?php
$pageTitle = "Home";
$currentPage = "home";
?>

<!-- Hero Section -->
<section id="home" class="hero">
    <div class="hero-content">
        <p class="hero-subtitle">Fotografie Portfolio</p>
        <h1 class="hero-title">Vang het <span class="accent">Moment</span></h1>
        <p style="color: var(--text-color); max-width: 600px; margin: 0 auto 2rem;">Een curatie van beweging, licht en architectuur. Ontdek de wereld door mijn lens.</p>
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
                <p class="section-subtitle">De Fotograaf</p>
                <h2 class="section-title">Arne Meevis</h2>
                <p>Fotografie is voor mij meer dan alleen een plaatje schieten; het is kijken met aandacht.</p>
                <p>Dit portfolio project is het resultaat van een intensieve periode van experimenteren met techniek, licht en compositie. Elk beeld vertelt een verhaal en elke foto was een les.</p>
                <p style="margin-top: 2rem; padding-top: 2rem; border-top: 1px solid var(--border-color);">
                    <a href="<?php echo url('portfolio'); ?>" style="color: var(--primary-color); text-decoration: none; border-bottom: 1px solid var(--primary-color); padding-bottom: 2px;">Bekijk mijn werk →</a>
                </p>
            </div>
        </div>
    </div>
</section>
