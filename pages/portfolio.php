<?php
$pageTitle = "Portfolio";
$currentPage = "portfolio";

// Get current filter
$currentFilter = isset($_GET['filter']) ? $_GET['filter'] : 'all';

// Get images based on filter
$images = getImagesByCategory($currentFilter);
?>

<!-- Gallery Section -->
<section id="gallery" class="gallery-section">
    <div class="container">
        <p class="section-subtitle">Mijn Werk</p>
        <h2 class="section-title">Fotografie Portfolio</h2>
        
        <div class="gallery-filters">
            <?php foreach ($categories as $key => $label): ?>
                <a href="<?php echo url('portfolio?filter=' . $key); ?>" 
                   class="filter-btn <?php echo $currentFilter === $key ? 'active' : ''; ?>" 
                   data-filter="<?php echo $key; ?>">
                    <?php echo e($label); ?>
                </a>
            <?php endforeach; ?>
        </div>

        <div class="gallery-grid">
            <?php foreach ($images as $image): ?>
                <a href="<?php echo url('foto/' . $image['id']); ?>" class="gallery-item" data-category="<?php echo e($image['category']); ?>">
                    <img src="<?php echo e($image['image']); ?>" alt="<?php echo e($image['title']); ?>">
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-content">
                            <h3><?php echo e($image['title']); ?></h3>
                            <p><?php echo e(ucfirst($image['category'])); ?></p>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
