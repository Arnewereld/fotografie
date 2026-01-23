<?php
$photoId = isset($_GET['id']) ? $_GET['id'] : null;
$photo = $photoId ? get_item_by_id($photoId) : null;

if (!$photo) {
    header('Location: ' . get_page_url('gallery'));
    exit;
}

$category = get_category_by_id($photo['categoryId']);
?>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 min-h-screen">
    
    <!-- Breadcrumb -->
    <div class="mb-8 flex items-center space-x-2 text-sm text-gray-400 fade-in">
        <a href="<?php echo get_page_url('gallery'); ?>" class="hover:text-white transition-colors">Portfolio</a>
        <span>/</span>
        <a href="<?php echo get_page_url('gallery', ['category' => $photo['categoryId']]); ?>" class="hover:text-white transition-colors">
            <?php echo e($category['title']); ?>
        </a>
        <span>/</span>
        <span class="text-brand-accent"><?php echo e($photo['title']); ?></span>
    </div>

    <!-- Photo Detail -->
    <div class="grid md:grid-cols-2 gap-12">
        
        <!-- Image -->
        <div class="fade-in-left">
            <div class="aspect-4-5 rounded-xl overflow-hidden bg-neutral-900 shadow-2xl">
                <img src="<?php echo e($photo['image']); ?>" 
                     alt="<?php echo e($photo['title']); ?>" 
                     class="w-full h-full object-cover">
            </div>
        </div>

        <!-- Details -->
        <div class="fade-in-right">
            <h1 class="text-4xl md:text-5xl font-serif text-white mb-4"><?php echo e($photo['title']); ?></h1>
            <p class="text-brand-accent uppercase tracking-widest text-sm mb-8">
                <?php echo e($category['title']); ?>
            </p>

            <!-- Description -->
            <div class="mb-8">
                <h3 class="text-xl font-serif text-white mb-3">Beschrijving</h3>
                <p class="text-gray-300 leading-relaxed"><?php echo e($photo['description']); ?></p>
            </div>

            <!-- Why Interesting -->
            <?php if (isset($photo['whyInteresting'])): ?>
            <div class="mb-8">
                <h3 class="text-xl font-serif text-white mb-3">Waarom interessant?</h3>
                <p class="text-gray-300 leading-relaxed"><?php echo e($photo['whyInteresting']); ?></p>
            </div>
            <?php endif; ?>

            <!-- Critique -->
            <?php if (isset($photo['critique'])): ?>
            <div class="mb-8">
                <h3 class="text-xl font-serif text-white mb-3">Eigen Kritiek</h3>
                <p class="text-gray-300 leading-relaxed"><?php echo e($photo['critique']); ?></p>
            </div>
            <?php endif; ?>

            <!-- Technical Specs -->
            <?php if (isset($photo['specs'])): ?>
            <div class="mb-8 bg-white-5 border border-white-10 rounded-xl p-6">
                <h3 class="text-xl font-serif text-white mb-4">Technische Specificaties</h3>
                <div class="grid grid-cols-2 gap-4 text-sm">
                    <?php if (isset($photo['specs']['camera'])): ?>
                    <div>
                        <span class="text-gray-500">Camera</span>
                        <p class="text-white font-medium"><?php echo e($photo['specs']['camera']); ?></p>
                    </div>
                    <?php endif; ?>
                    <?php if (isset($photo['specs']['shutter'])): ?>
                    <div>
                        <span class="text-gray-500">Sluitertijd</span>
                        <p class="text-white font-medium"><?php echo e($photo['specs']['shutter']); ?></p>
                    </div>
                    <?php endif; ?>
                    <?php if (isset($photo['specs']['aperture'])): ?>
                    <div>
                        <span class="text-gray-500">Diafragma</span>
                        <p class="text-white font-medium"><?php echo e($photo['specs']['aperture']); ?></p>
                    </div>
                    <?php endif; ?>
                    <?php if (isset($photo['specs']['iso'])): ?>
                    <div>
                        <span class="text-gray-500">ISO</span>
                        <p class="text-white font-medium"><?php echo e($photo['specs']['iso']); ?></p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>

            <!-- Analysis -->
            <?php if (isset($photo['analysis'])): ?>
            <div class="mb-8">
                <h3 class="text-xl font-serif text-white mb-4">Analyse</h3>
                <div class="space-y-3 text-sm">
                    <?php if (isset($photo['analysis']['composition'])): ?>
                    <div>
                        <span class="text-gray-500">Compositie:</span>
                        <span class="text-white ml-2"><?php echo e($photo['analysis']['composition']); ?></span>
                    </div>
                    <?php endif; ?>
                    <?php if (isset($photo['analysis']['format'])): ?>
                    <div>
                        <span class="text-gray-500">Formaat:</span>
                        <span class="text-white ml-2"><?php echo e($photo['analysis']['format']); ?></span>
                    </div>
                    <?php endif; ?>
                    <?php if (isset($photo['analysis']['perspective'])): ?>
                    <div>
                        <span class="text-gray-500">Perspectief:</span>
                        <span class="text-white ml-2"><?php echo e($photo['analysis']['perspective']); ?></span>
                    </div>
                    <?php endif; ?>
                    <?php if (isset($photo['analysis']['depthOfField'])): ?>
                    <div>
                        <span class="text-gray-500">Scherptediepte:</span>
                        <span class="text-white ml-2"><?php echo e($photo['analysis']['depthOfField']); ?></span>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>

            <!-- Back Button -->
            <div class="mt-12">
                <a href="<?php echo get_page_url('gallery', ['category' => $photo['categoryId']]); ?>" 
                   class="inline-flex items-center px-6 py-3 bg-white-5 border border-white-10 text-white rounded-lg hover:bg-white-10 transition-colors">
                    <svg class="mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    Terug naar <?php echo e($category['title']); ?>
                </a>
            </div>
        </div>
    </div>

</div>
