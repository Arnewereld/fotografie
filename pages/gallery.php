<?php
$selectedCategory = isset($_GET['category']) ? $_GET['category'] : null;
$categoryData = $selectedCategory ? get_category_by_id($selectedCategory) : null;
$filteredItems = $selectedCategory ? get_items_by_category($selectedCategory) : [];
?>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 min-h-screen">

    <!-- Header / Breadcrumbs -->
    <div class="mb-12 flex items-center justify-between fade-in">
        <div class="flex items-center space-x-4">
            <?php if ($selectedCategory): ?>
                <a href="<?php echo get_page_url('gallery'); ?>" 
                   class="flex items-center text-gray-400 hover:text-white transition-colors group">
                    <svg class="mr-2 h-5 w-5 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    Terug naar overzicht
                </a>
            <?php else: ?>
                <div>
                    <h2 class="text-4xl md:text-5xl font-serif text-white mb-2">Portfolio</h2>
                    <div class="h-1 w-20 bg-brand-accent"></div>
                </div>
            <?php endif; ?>
        </div>

        <?php if ($selectedCategory && $categoryData): ?>
            <h2 class="text-3xl font-serif text-brand-accent hidden md:block">
                <?php echo e($categoryData['title']); ?>
            </h2>
        <?php endif; ?>
    </div>

    <?php if (!$selectedCategory): ?>
        <!-- Categories Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($portfolioCategories as $index => $category): ?>
            <a href="<?php echo get_page_url('gallery', ['category' => $category['id']]); ?>" 
               class="group relative aspect-4-5 overflow-hidden rounded-2xl bg-neutral-900 border border-white-5 hover:border-brand-accent-50 transition-all duration-500 text-left shadow-2xl hover:shadow-glow-subtle fade-in-up"
               style="animation-delay: <?php echo $index * 0.1; ?>s">
                
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black-50 to-transparent z-10"></div>

                <!-- Background Image -->
                <?php if ($category['image']): ?>
                <div class="absolute inset-0">
                    <img src="<?php echo e($category['image']); ?>" 
                         alt="<?php echo e($category['title']); ?>" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-60">
                </div>
                <?php else: ?>
                <div class="absolute inset-0 bg-neutral-800 transition-transform duration-700 group-hover:scale-110 opacity-50"></div>
                <div class="absolute inset-0 flex items-center justify-center text-neutral-700 group-hover:text-brand-accent-20 transition-colors z-0">
                    <svg class="h-32 w-32 opacity-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                    </svg>
                </div>
                <?php endif; ?>

                <div class="absolute bottom-0 left-0 p-8 z-20 w-full transform translate-y-2 group-hover:translate-y-0 transition-transform duration-500">
                    <h3 class="text-3xl font-serif text-white group-hover:text-brand-accent transition-colors mb-2">
                        <?php echo e($category['title']); ?>
                    </h3>
                    <p class="text-gray-400 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">
                        <?php echo e($category['description']); ?>
                    </p>
                </div>
            </a>
            <?php endforeach; ?>
        </div>

    <?php else: ?>
        <!-- Photos Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php if (empty($filteredItems)): ?>
                <div class="col-span-full text-center py-20 text-gray-500">
                    <svg class="h-12 w-12 mx-auto mb-4 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                    </svg>
                    <p>Nog geen foto's in deze categorie.</p>
                </div>
            <?php else: ?>
                <?php foreach ($filteredItems as $index => $item): ?>
                <a href="<?php echo get_page_url('photo', ['id' => $item['id']]); ?>" 
                   class="group relative aspect-4-5 overflow-hidden rounded-xl bg-neutral-900 border border-white-5 shadow-lg hover:shadow-xl transition-all duration-300 fade-in-up"
                   style="animation-delay: <?php echo $index * 0.1; ?>s">
                    <img src="<?php echo e($item['image']); ?>" 
                         alt="<?php echo e($item['title']); ?>" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black-40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center backdrop-blur-sm">
                        <span class="text-brand-accent font-serif text-xl italic mb-2 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            <?php echo e($item['title']); ?>
                        </span>
                        <span class="text-white text-xs tracking-widest uppercase border border-white-30 px-4 py-2 rounded-full hover:bg-white hover:text-black transition-colors">
                            Bekijk Details
                        </span>
                    </div>
                </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    <?php endif; ?>

</div>
