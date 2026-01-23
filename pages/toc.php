<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12 min-h-screen">

    <!-- Title -->
    <h1 class="text-4xl md:text-5xl font-serif text-white mb-4 fade-in">Inhoudsopgave</h1>
    <p class="text-gray-400 mb-12 fade-in">Een volledig overzicht van alle foto's in dit portfolio</p>

    <!-- Categories -->
    <?php foreach ($portfolioCategories as $index => $category): ?>
    <?php $categoryItems = get_items_by_category($category['id']); ?>
    
    <section class="mb-16 fade-in-up" style="animation-delay: <?php echo $index * 0.1; ?>s">
        <!-- Category Header -->
        <div class="mb-8">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-3xl font-serif text-brand-accent"><?php echo e($category['title']); ?></h2>
                <a href="<?php echo get_page_url('gallery', ['category' => $category['id']]); ?>" 
                   class="text-sm text-gray-400 hover:text-white transition-colors flex items-center group">
                    Bekijk categorie
                    <svg class="ml-2 h-4 w-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
            <p class="text-gray-400 text-sm mb-6"><?php echo e($category['description']); ?></p>
            <div class="h-px bg-gradient-to-r from-brand-accent via-brand-accent-30 to-transparent"></div>
        </div>

        <!-- Items List -->
        <?php if (empty($categoryItems)): ?>
            <p class="text-gray-500 italic">Nog geen foto's in deze categorie.</p>
        <?php else: ?>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php foreach ($categoryItems as $item): ?>
                <a href="<?php echo get_page_url('photo', ['id' => $item['id']]); ?>" 
                   class="group flex items-start space-x-4 p-4 rounded-lg bg-neutral-900-50 border border-white-5 hover:border-brand-accent-30 hover:bg-neutral-900 transition-all duration-300">
                    <!-- Thumbnail -->
                    <div class="w-20 h-20 flex-shrink-0 rounded-lg overflow-hidden bg-neutral-800">
                        <img src="<?php echo e($item['image']); ?>" 
                             alt="<?php echo e($item['title']); ?>" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    
                    <!-- Info -->
                    <div class="flex-1 min-w-0">
                        <h3 class="text-white font-medium mb-1 group-hover:text-brand-accent transition-colors truncate">
                            <?php echo e($item['title']); ?>
                        </h3>
                        <p class="text-gray-500 text-sm line-clamp-2">
                            <?php echo e($item['description']); ?>
                        </p>
                        <?php if (isset($item['specs'])): ?>
                        <p class="text-gray-600 text-xs mt-2">
                            <?php echo isset($item['specs']['camera']) ? e($item['specs']['camera']) : ''; ?>
                            <?php echo isset($item['specs']['aperture']) ? ' • ' . e($item['specs']['aperture']) : ''; ?>
                        </p>
                        <?php endif; ?>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </section>
    <?php endforeach; ?>

    <!-- Summary Stats -->
    <section class="mt-16 bg-white-5 border border-white-10 rounded-xl p-8 fade-in-up">
        <h3 class="text-2xl font-serif text-white mb-6">Portfolio Overzicht</h3>
        <div class="grid md:grid-cols-3 gap-6 text-center">
            <div>
                <div class="text-4xl font-serif text-brand-accent mb-2"><?php echo count($portfolioCategories); ?></div>
                <div class="text-gray-400 text-sm uppercase tracking-wider">Categorieën</div>
            </div>
            <div>
                <div class="text-4xl font-serif text-brand-accent mb-2"><?php echo count($portfolioItems); ?></div>
                <div class="text-gray-400 text-sm uppercase tracking-wider">Foto's</div>
            </div>
            <div>
                <div class="text-4xl font-serif text-brand-accent mb-2">5</div>
                <div class="text-gray-400 text-sm uppercase tracking-wider">Disciplines</div>
            </div>
        </div>
    </section>

    <!-- Back to Gallery -->
    <div class="mt-12 text-center fade-in">
        <a href="<?php echo get_page_url('gallery'); ?>" 
           class="inline-flex items-center px-8 py-3 bg-brand-accent text-brand-dark font-medium rounded-full hover:bg-brand-accent-hover transition-all shadow-glow hover:shadow-glow-strong">
            Bekijk het portfolio
            <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>

</div>
