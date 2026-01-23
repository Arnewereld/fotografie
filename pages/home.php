<?php
// Get featured items
$featuredIds = ['b1', 'm2', 'p1'];
$featuredItems = array_filter($portfolioItems, function($item) use ($featuredIds) {
    return in_array($item['id'], $featuredIds);
});
?>

<div class="relative overflow-x-hidden">
    
    <!-- Hero Section -->
    <section class="relative h-screen flex items-center justify-center overflow-hidden">
        <!-- Background -->
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-br from-brand-dark via-brand-dark-light to-black z-10"></div>
            
            <!-- Animated Orbs -->
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-brand-accent-transparent rounded-full blur-3xl animate-pulse-slow"></div>
            <div class="absolute bottom-1/4 right-1/4 w-[500px] h-[500px] bg-purple-transparent rounded-full blur-3xl animate-pulse-slower"></div>
        </div>

        <!-- Content -->
        <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="fade-in">
                <h2 class="text-brand-accent text-sm md:text-base uppercase tracking-widest mb-4">
                    Fotografie Portfolio
                </h2>
                <h1 class="text-6xl md:text-9xl font-serif text-white mb-6 leading-tight">
                    Vang het <span class="italic text-brand-accent">Moment</span>
                </h1>
                <p class="text-xl text-gray-400 max-w-2xl mx-auto font-light tracking-wide mb-10">
                    Een curatie van beweging, licht, en architectuur. Ontdek de wereld door mijn lens.
                </p>

                <div class="flex flex-col md:flex-row items-center justify-center gap-4">
                    <a href="<?php echo get_page_url('gallery'); ?>" 
                       class="px-8 py-3 bg-brand-accent text-brand-dark font-medium rounded-full hover:bg-brand-accent-hover transition-all shadow-glow hover:shadow-glow-strong">
                        Bekijk mijn werk
                    </a>
                    <a href="<?php echo get_page_url('info'); ?>" 
                       class="px-8 py-3 border border-white-20 text-white rounded-full hover:bg-white-10 transition-colors">
                        Over dit project
                    </a>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-32 left-1/2 -translate-x-1/2 text-gray-500 animate-bounce z-20">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </div>
    </section>

    <!-- Featured Work Section -->
    <section class="py-24 bg-neutral-900-transparent relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12 fade-in-up">
                <div>
                    <h2 class="text-4xl font-serif text-white mb-2">Uitgelicht Werk</h2>
                    <div class="h-1 w-20 bg-brand-accent"></div>
                </div>
                <a href="<?php echo get_page_url('gallery'); ?>" 
                   class="hidden md:flex items-center text-brand-accent hover:text-white transition-colors group">
                    Bekijk alles 
                    <svg class="ml-2 h-4 w-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <?php foreach ($featuredItems as $index => $item): ?>
                <div class="group relative aspect-4-5 overflow-hidden rounded-xl bg-neutral-800 fade-in-up" style="animation-delay: <?php echo $index * 0.2; ?>s">
                    <img src="<?php echo e($item['image']); ?>" 
                         alt="<?php echo e($item['title']); ?>" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black-80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                        <h3 class="text-xl font-serif text-white"><?php echo e($item['title']); ?></h3>
                        <p class="text-gray-400 text-sm"><?php echo e(get_category_by_id($item['categoryId'])['title']); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <a href="<?php echo get_page_url('gallery'); ?>" 
               class="md:hidden mt-8 flex items-center justify-center text-brand-accent hover:text-white transition-colors group">
                Bekijk alles 
                <svg class="ml-2 h-4 w-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </section>

    <!-- Services / Disciplines -->
    <section class="py-24 bg-black relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 fade-in-up">
                <h2 class="text-4xl font-serif text-white mb-4">Disciplines</h2>
                <p class="text-gray-400 max-w-2xl mx-auto">
                    Mijn passie ligt in het vastleggen van de diversiteit van het leven.
                    Van de verstilde momenten in de studio tot de hectiek van de sport.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 text-center">
                <div class="p-8 rounded-2xl bg-white-5 border border-white-10 hover:border-brand-accent-30 transition-all duration-300 hover:-translate-y-2 fade-in-up">
                    <div class="w-16 h-16 bg-brand-accent-10 rounded-full flex items-center justify-center mx-auto mb-6 text-brand-accent">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-serif text-white mb-3">Portret & Studio</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Het vangen van karakter en emotie door middel van gecontroleerd licht en regie.
                    </p>
                </div>

                <div class="p-8 rounded-2xl bg-white-5 border border-white-10 hover:border-brand-accent-30 transition-all duration-300 hover:-translate-y-2 fade-in-up" style="animation-delay: 0.1s">
                    <div class="w-16 h-16 bg-brand-accent-10 rounded-full flex items-center justify-center mx-auto mb-6 text-brand-accent">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-serif text-white mb-3">Actie & Beweging</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        De snelheid van het moment bevriezen met technische perfectie.
                    </p>
                </div>

                <div class="p-8 rounded-2xl bg-white-5 border border-white-10 hover:border-brand-accent-30 transition-all duration-300 hover:-translate-y-2 fade-in-up" style="animation-delay: 0.2s">
                    <div class="w-16 h-16 bg-brand-accent-10 rounded-full flex items-center justify-center mx-auto mb-6 text-brand-accent">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-serif text-white mb-3">Architectuur</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Spelen met lijnen, vormen en natuurlijk licht voor abstracte composities.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Teaser -->
    <section class="py-24 bg-brand-dark border-t border-white-5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center gap-16">
                <div class="md:w-1/2 relative fade-in-left">
                    <div class="aspect-3-4 rounded-lg overflow-hidden grayscale hover:grayscale-0 transition-all duration-500">
                        <img src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?q=80&w=2070&auto=format&fit=crop" 
                             alt="Photographer" 
                             class="w-full h-full object-cover">
                    </div>
                    <!-- Decorative elements -->
                    <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-brand-accent-10 rounded-full blur-xl z-0"></div>
                    <div class="absolute -top-6 -left-6 w-32 h-32 border border-brand-accent-30 rounded-full z-10"></div>
                </div>

                <div class="md:w-1/2 fade-in-right">
                    <h4 class="text-brand-accent uppercase tracking-widest text-sm mb-2">De Fotograaf</h4>
                    <h2 class="text-4xl md:text-5xl font-serif text-white mb-6"><?php echo e(PHOTOGRAPHER_NAME); ?></h2>
                    <p class="text-gray-300 text-lg leading-relaxed mb-6">
                        Fotografie is voor mij meer dan alleen een plaatje schieten; het is kijken met aandacht.
                        <br><br>
                        Dit portfolio project is het resultaat van een intensieve periode van experimenteren met techniek,
                        licht en compositie. Elk beeld vertelt een verhaal en elke fout was een les.
                    </p>
                    <a href="<?php echo get_page_url('info'); ?>" 
                       class="text-white border-b border-brand-accent pb-1 hover:text-brand-accent transition-colors">
                        Lees het volledige voorwoord
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>
