<?php
$pageTitle = "Foto Detail";
$currentPage = "portfolio";

// Get photo ID from URL
$photoId = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Get photo data
$photo = getImageById($photoId);

// If photo not found, redirect to portfolio
if (!$photo) {
    header('Location: ' . url('portfolio'));
    exit;
}
?>

<!-- Photo Detail Section -->
<section class="photo-detail-section">
    <div class="container">
        <!-- Back button -->
        <a href="<?php echo url('portfolio'); ?>" class="back-button">
            ← Terug naar Portfolio
        </a>

        <div class="photo-detail-header">
            <h1><?php echo e($photo['title']); ?></h1>
            <p class="photo-meta">
                <span><?php echo e($photo['location']); ?></span> • 
                <span><?php echo date('d M Y', strtotime($photo['date'])); ?></span>
            </p>
        </div>

        <!-- Before/After Slider -->
        <div class="before-after-container">
            <div class="before-after-slider">
                <div class="image-wrapper">
                    <img src="<?php echo e($photo['imageBefore']); ?>" alt="Voor bewerking" class="image-before">
                    <img src="<?php echo e($photo['image']); ?>" alt="Na bewerking" class="image-after">
                </div>
                <input type="range" min="0" max="100" value="50" class="slider-control" id="beforeAfterSlider">
                <div class="slider-line"></div>
                <div class="slider-button">
                    <svg viewBox="0 0 24 24" fill="white">
                        <path d="M15.5 5l-7 7 7 7"/>
                        <path d="M8.5 5l7 7-7 7"/>
                    </svg>
                </div>
            </div>
            
            <div class="image-labels">
                <span class="label-before">Voor</span>
                <span class="label-after">Na</span>
            </div>

            <button class="fullscreen-btn" onclick="toggleFullscreen()">
                <svg viewBox="0 0 24 24" fill="currentColor">
                    <path d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z"/>
                </svg>
                Volledig scherm
            </button>
        </div>

        <!-- Photo Info Grid -->
        <div class="photo-info-grid">
            <div class="info-card">
                <h3>Beschrijving</h3>
                <p><?php echo e($photo['description']); ?></p>
            </div>

            <div class="info-card">
                <h3>Camera & Lens</h3>
                <p><strong>Camera:</strong> <?php echo e($photo['camera']); ?></p>
                <p><strong>Lens:</strong> <?php echo e($photo['lens']); ?></p>
            </div>

            <div class="info-card">
                <h3>Instellingen</h3>
                <p><?php echo e($photo['settings']); ?></p>
            </div>

            <div class="info-card">
                <h3>Locatie & Datum</h3>
                <p><strong>Locatie:</strong> <?php echo e($photo['location']); ?></p>
                <p><strong>Datum:</strong> <?php echo date('d F Y', strtotime($photo['date'])); ?></p>
            </div>
        </div>

        <!-- Navigation to other photos -->
        <div class="photo-navigation">
            <?php
            $prevPhoto = getImageById($photoId - 1);
            $nextPhoto = getImageById($photoId + 1);
            ?>
            
            <?php if ($prevPhoto): ?>
                <a href="<?php echo url('foto/' . $prevPhoto['id']); ?>" class="nav-photo prev-photo">
                    <span>← Vorige</span>
                    <img src="<?php echo e($prevPhoto['image']); ?>" alt="<?php echo e($prevPhoto['title']); ?>">
                    <p><?php echo e($prevPhoto['title']); ?></p>
                </a>
            <?php endif; ?>

            <?php if ($nextPhoto): ?>
                <a href="<?php echo url('foto/' . $nextPhoto['id']); ?>" class="nav-photo next-photo">
                    <span>Volgende →</span>
                    <img src="<?php echo e($nextPhoto['image']); ?>" alt="<?php echo e($nextPhoto['title']); ?>">
                    <p><?php echo e($nextPhoto['title']); ?></p>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>

<style>
.photo-detail-section {
    min-height: 100vh;
    padding: 120px 0 80px;
    background: var(--bg-dark);
}

.back-button {
    display: inline-block;
    color: var(--primary-color);
    text-decoration: none;
    margin-bottom: 2rem;
    transition: transform 0.3s ease;
}

.back-button:hover {
    transform: translateX(-5px);
}

.photo-detail-header {
    text-align: center;
    margin-bottom: 3rem;
}

.photo-detail-header h1 {
    font-family: 'Playfair Display', serif;
    font-size: 3rem;
    color: var(--light-color);
    margin-bottom: 1rem;
}

.photo-meta {
    color: var(--text-color);
    font-size: 1.1rem;
}

.before-after-container {
    max-width: 1000px;
    margin: 0 auto 4rem;
}

.before-after-slider {
    position: relative;
    width: 100%;
    aspect-ratio: 16/9;
    overflow: hidden;
    border-radius: 15px;
    cursor: col-resize;
}

.image-wrapper {
    position: relative;
    width: 100%;
    height: 100%;
}

.image-before,
.image-after {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.image-after {
    clip-path: polygon(0 0, 50% 0, 50% 100%, 0 100%);
}

.slider-control {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    cursor: col-resize;
    z-index: 3;
}

.slider-line {
    position: absolute;
    top: 0;
    left: 50%;
    width: 3px;
    height: 100%;
    background: var(--primary-color);
    transform: translateX(-50%);
    pointer-events: none;
    z-index: 2;
}

.slider-button {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 50px;
    height: 50px;
    background: var(--primary-color);
    border-radius: 50%;
    transform: translate(-50%, -50%);
    display: flex;
    align-items: center;
    justify-content: center;
    pointer-events: none;
    z-index: 2;
    box-shadow: 0 4px 15px rgba(212, 175, 55, 0.4);
}

.slider-button svg {
    width: 30px;
    height: 30px;
}

.image-labels {
    display: flex;
    justify-content: space-between;
    margin-top: 1rem;
    font-size: 0.9rem;
    color: var(--text-color);
    text-transform: uppercase;
    letter-spacing: 2px;
}

.fullscreen-btn {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin: 2rem auto 0;
    padding: 12px 24px;
    background: var(--primary-color);
    color: var(--dark-color);
    border: none;
    border-radius: 50px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}

.fullscreen-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(212, 175, 55, 0.5);
}

.fullscreen-btn svg {
    width: 20px;
    height: 20px;
}

.photo-info-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-bottom: 4rem;
}

.info-card {
    background: rgba(212, 175, 55, 0.05);
    padding: 2rem;
    border-radius: 15px;
    border: 1px solid rgba(212, 175, 55, 0.2);
}

.info-card h3 {
    color: var(--primary-color);
    margin-bottom: 1rem;
    font-size: 1.2rem;
}

.info-card p {
    color: var(--text-color);
    margin-bottom: 0.5rem;
}

.photo-navigation {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-top: 4rem;
}

.nav-photo {
    position: relative;
    overflow: hidden;
    border-radius: 15px;
    text-decoration: none;
    transition: transform 0.3s ease;
}

.nav-photo:hover {
    transform: translateY(-5px);
}

.nav-photo img {
    width: 100%;
    aspect-ratio: 4/3;
    object-fit: cover;
    filter: grayscale(100%) brightness(0.5);
    transition: filter 0.3s ease;
}

.nav-photo:hover img {
    filter: grayscale(0%) brightness(1);
}

.nav-photo span {
    position: absolute;
    top: 1rem;
    color: var(--primary-color);
    font-weight: 600;
    font-size: 0.9rem;
    z-index: 1;
}

.prev-photo span {
    left: 1rem;
}

.next-photo span {
    right: 1rem;
}

.nav-photo p {
    position: absolute;
    bottom: 1rem;
    left: 1rem;
    right: 1rem;
    color: var(--light-color);
    font-size: 1.1rem;
    font-weight: 600;
    z-index: 1;
}

@media (max-width: 768px) {
    .photo-detail-header h1 {
        font-size: 2rem;
    }
    
    .photo-info-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<script>
// Before/After Slider
const slider = document.getElementById('beforeAfterSlider');
const imageAfter = document.querySelector('.image-after');
const sliderLine = document.querySelector('.slider-line');
const sliderButton = document.querySelector('.slider-button');

if (slider) {
    slider.addEventListener('input', function() {
        const value = this.value;
        imageAfter.style.clipPath = `polygon(0 0, ${value}% 0, ${value}% 100%, 0 100%)`;
        sliderLine.style.left = `${value}%`;
        sliderButton.style.left = `${value}%`;
    });
}

// Fullscreen functionality
function toggleFullscreen() {
    const container = document.querySelector('.before-after-slider');
    
    if (!document.fullscreenElement) {
        if (container.requestFullscreen) {
            container.requestFullscreen();
        } else if (container.webkitRequestFullscreen) {
            container.webkitRequestFullscreen();
        } else if (container.msRequestFullscreen) {
            container.msRequestFullscreen();
        }
    } else {
        if (document.exitFullscreen) {
            document.exitFullscreen();
        }
    }
}

// Keyboard navigation
document.addEventListener('keydown', function(e) {
    if (e.key === 'ArrowLeft' && document.querySelector('.prev-photo')) {
        window.location.href = document.querySelector('.prev-photo').href;
    } else if (e.key === 'ArrowRight' && document.querySelector('.next-photo')) {
        window.location.href = document.querySelector('.next-photo').href;
    }
});
</script>
