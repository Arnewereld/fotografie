<?php
require_once 'data/portfolioData.php';

// Get featured items
$featuredIds = ['b1', 'm2', 'p1'];
$featuredItems = array_filter($portfolioItems, function($item) use ($featuredIds) {
    return in_array($item['id'], $featuredIds);
});
?>

<div class="relative overflow-x-hidden fade-in">
    <!-- HERO SECTION -->
    <section class="relative h-screen flex items-center justify-center overflow-hidden">
        <!-- Dynamic Background -->
        <div class="absolute inset-0 z-0">
            <!-- Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-br from-brand-dark via-brand-dark/10 to-black z-10"></div>
            
            <!-- Animated Orbs -->
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-brand-accent/20 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-1/4 right-1/4 w-[500px] h-[500px] bg-purple-900/20 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
        </div>

        <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div>
                <h2 class="text-brand-accent text-sm md:text-base uppercase tracking-[0.3em] mb-4">
                    Fotografie Portfolio
                </h2>
                <h1 class="text-6xl md:text-9xl font-serif text-white mb-6 leading-tight">
                    Vang het <span class="italic text-brand-accent">Moment</span>
                </h1>
                <p class="text-xl text-gray-400 max-w-2xl mx-auto font-light tracking-wide mb-10">
                    Een curatie van beweging, licht, en architectuur. Ontdek de wereld door mijn lens.
                </p>

                <div class="flex flex-col md:flex-row items-center justify-center gap-4">
                    <a href="/gallery" class="px-8 py-3 bg-brand-accent text-brand-dark font-medium rounded-full hover:bg-brand-accent-hover transition-colors shadow-[0_0_20px_rgba(212,175,55,0.3)] hover:shadow-[0_0_30px_rgba(212,175,55,0.5)]">
                        Bekijk mijn werk
                    </a>
                    <a href="/info" class="px-8 py-3 border border-white/20 text-white rounded-full hover:bg-white/10 transition-colors">
                        Over dit project
                    </a>
                </div>
            </div>
        </div>

        <div class="absolute bottom-32 left-1/2 -translate-x-1/2 text-gray-500 animate-bounce z-20">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </div>
    </section>

    <!-- FEATURED WORK SECTION -->
    <section class="py-24 bg-neutral-900/50 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="text-4xl font-serif text-white mb-2">Uitgelicht Werk</h2>
                    <div class="h-1 w-20 bg-brand-accent"></div>
                </div>
                <a href="/gallery" class="hidden md:flex items-center text-brand-accent hover:text-white transition-colors group">
                    Bekijk alles 
                    <svg class="ml-2 h-4 w-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <?php foreach ($featuredItems as $item): ?>
                <div class="group relative aspect-[4/5] overflow-hidden rounded-xl bg-neutral-800">
                    <img src="<?php echo htmlspecialchars($item['image']); ?>" alt="<?php echo htmlspecialchars($item['title']); ?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                        <h3 class="text-xl font-serif text-white"><?php echo htmlspecialchars($item['title']); ?></h3>
                        <p class="text-gray-400 text-sm"><?php echo htmlspecialchars($item['description']); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <a href="/gallery" class="md:hidden mt-8 flex items-center justify-center text-brand-accent hover:text-white transition-colors group">
                Bekijk alles 
                <svg class="ml-2 h-4 w-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </section>

    <!-- SERVICES / DISCIPLINES -->
    <section class="py-24 bg-black relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-serif text-white mb-4">Disciplines</h2>
                <p class="text-gray-400 max-w-2xl mx-auto">
                    Mijn passie ligt in het vastleggen van de diversiteit van het leven.
                    Van de verstilde momenten in de studio tot de hectiek van de sport.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 text-center">
                <div class="p-8 rounded-2xl bg-white/5 border border-white/10 hover:border-brand-accent/30 transition-all hover:-translate-y-2">
                    <div class="w-16 h-16 bg-brand-accent/10 rounded-full flex items-center justify-center mx-auto mb-6 text-brand-accent">
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

                <div class="p-8 rounded-2xl bg-white/5 border border-white/10 hover:border-brand-accent/30 transition-all hover:-translate-y-2">
                    <div class="w-16 h-16 bg-brand-accent/10 rounded-full flex items-center justify-center mx-auto mb-6 text-brand-accent">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-serif text-white mb-3">Actie & Beweging</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        De snelheid van het moment bevriezen met technische perfectie.
                    </p>
                </div>

                <div class="p-8 rounded-2xl bg-white/5 border border-white/10 hover:border-brand-accent/30 transition-all hover:-translate-y-2">
                    <div class="w-16 h-16 bg-brand-accent/10 rounded-full flex items-center justify-center mx-auto mb-6 text-brand-accent">
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

    <!-- ABOUT TEASER -->
    <section class="py-24 bg-brand-dark border-t border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center gap-16">
                <div class="md:w-1/2 relative">
                    <div class="aspect-[3/4] rounded-lg overflow-hidden grayscale hover:grayscale-0 transition-all duration-500">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=1974&auto=format&fit=crop" alt="Photographer" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-brand-accent/10 rounded-full blur-xl z-0"></div>
                    <div class="absolute -top-6 -left-6 w-32 h-32 border border-brand-accent/30 rounded-full z-10"></div>
                </div>

                <div class="md:w-1/2">
                    <h4 class="text-brand-accent uppercase tracking-widest text-sm mb-2">De Fotograaf</h4>
                    <h2 class="text-4xl md:text-5xl font-serif text-white mb-6">Ivan Rheenen</h2>
                    <p class="text-gray-300 text-lg leading-relaxed mb-6">
                        Fotografie is voor mij meer dan alleen een plaatje schieten; het is kijken met aandacht.
                        <br /><br />
                        Dit portfolio project is het resultaat van een intensieve periode van experimenteren met techniek,
                        licht en compositie. Elk beeld vertelt een verhaal en elke fout was een les.
                    </p>
                    <a href="/info" class="text-white border-b border-brand-accent pb-1 hover:text-brand-accent transition-colors">
                        Lees het volledige voorwoord
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
