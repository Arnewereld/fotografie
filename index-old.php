<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_TITLE; ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="nav-brand">
                <h1>IVR</h1>
            </div>
            <ul class="nav-menu">
                <li><a href="#home" class="nav-link active">START</a></li>
                <li><a href="#about" class="nav-link">INHOUD</a></li>
                <li><a href="#gallery" class="nav-link">PORTFOLIO</a></li>
                <li><a href="#contact" class="nav-link">INFO</a></li>
            </ul>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <p class="hero-subtitle">Fotografie Portfolio</p>
            <h1 class="hero-title">Vang het <span class="accent">Moment</span></h1>
            <p style="color: var(--text-color); max-width: 600px; margin: 0 auto 2rem;">Een curatie van beweging, licht en architectuur. Ontdek de wereld door mijn lens.</p>
            <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                <a href="#gallery" class="btn btn-primary">Bekijk mijn werk</a>
                <a href="#about" class="btn btn-secondary">Over dit project</a>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery-section">
        <div class="container">
            <p class="section-subtitle">Mijn Werk</p>
            <h2 class="section-title">Fotografie Portfolio</h2>
            
            <div class="gallery-filters">
                <button class="filter-btn active" data-filter="all">Alles</button>
                <button class="filter-btn" data-filter="portrait">Portret</button>
                <button class="filter-btn" data-filter="landscape">Landschap</button>
                <button class="filter-btn" data-filter="nature">Natuur</button>
                <button class="filter-btn" data-filter="urban">Stedelijk</button>
            </div>

            <div class="gallery-grid">
                <?php include 'gallery.php'; ?>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="about-content">
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=800&q=80" alt="Arne Meevis">
                </div>
                <div class="about-text">
                    <p class="section-subtitle">De Fotograaf</p>
                    <h2 class="section-title">Arne Meevis</h2>
                    <p>Fotografie is voor mij meer dan alleen een plaatje schieten; het is kijken met aandacht.</p>
                    <p>Dit portfolio project is het resultaat van een intensieve periode van experimenteren met techniek, licht en compositie. Elk beeld vertelt een verhaal en elke foto was een les.</p>
                    <p style="margin-top: 2rem; padding-top: 2rem; border-top: 1px solid var(--border-color);">
                        <a href="#gallery" style="color: var(--primary-color); text-decoration: none; border-bottom: 1px solid var(--primary-color); padding-bottom: 2px;">Lees het volledige voorwoord →</a>
                    </p>
                </div>
            </div>
        </div>
    </section>



    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All rights reserved.</p>
        </div>
    </footer>

    <!-- Lightbox Modal -->
    <div id="lightbox" class="lightbox">
        <span class="lightbox-close">&times;</span>
        <img class="lightbox-content" id="lightbox-img">
        <div class="lightbox-caption"></div>
        <a class="lightbox-prev">&#10094;</a>
        <a class="lightbox-next">&#10095;</a>
    </div>

    <script src="js/script.js"></script>
</body>
</html>
