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
            <a href="<?php echo url('over'); ?>" class="btn btn-secondary">Over dit project</a>
        </div>
    </div>
</section>
