<?php
require_once 'data/portfolioData.php';
?>

<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12 min-h-screen fade-in">
    <div class="mb-12">
        <h1 class="text-4xl md:text-6xl font-serif text-white mb-4">Inhoudsopgave</h1>
        <div class="h-1 w-20 bg-brand-accent mb-8"></div>
        <p class="text-xl text-gray-300 leading-relaxed">
            Overzicht van alle secties en foto's in dit portfolio
        </p>
    </div>

    <!-- Navigation Links -->
    <div class="grid md:grid-cols-2 gap-6 mb-12">
        <a href="/" class="bg-white/5 backdrop-blur-md border border-white/10 rounded-xl p-6 hover:border-brand-accent/50 transition-all hover:translate-y-[-4px]">
            <h3 class="text-xl font-serif text-brand-accent mb-2">Home</h3>
            <p class="text-gray-400 text-sm">Welkomstpagina met uitgelicht werk en disciplines</p>
        </a>
        <a href="/gallery" class="bg-white/5 backdrop-blur-md border border-white/10 rounded-xl p-6 hover:border-brand-accent/50 transition-all hover:translate-y-[-4px]">
            <h3 class="text-xl font-serif text-brand-accent mb-2">Portfolio</h3>
            <p class="text-gray-400 text-sm">Volledig overzicht van alle fotocategorieën</p>
        </a>
        <a href="/lighting" class="bg-white/5 backdrop-blur-md border border-white/10 rounded-xl p-6 hover:border-brand-accent/50 transition-all hover:translate-y-[-4px]">
            <h3 class="text-xl font-serif text-brand-accent mb-2">Lichtplan</h3>
            <p class="text-gray-400 text-sm">Uitleg over verschillende lichtopstellingen</p>
        </a>
        <a href="/info" class="bg-white/5 backdrop-blur-md border border-white/10 rounded-xl p-6 hover:border-brand-accent/50 transition-all hover:translate-y-[-4px]">
            <h3 class="text-xl font-serif text-brand-accent mb-2">Info</h3>
            <p class="text-gray-400 text-sm">Over dit project en mijn aanpak</p>
        </a>
    </div>

    <!-- Portfolio Categories -->
    <div class="space-y-8">
        <h2 class="text-3xl font-serif text-white mb-6">Portfolio Categorieën</h2>
        
        <?php foreach ($portfolioCategories as $category): 
            $categoryItems = array_filter($portfolioItems, function($item) use ($category) {
                return $item['categoryId'] === $category['id'];
            });
        ?>
        <div class="bg-white/5 backdrop-blur-md border border-white/10 rounded-xl p-6">
            <div class="flex items-start justify-between mb-4">
                <div class="flex-1">
                    <h3 class="text-2xl font-serif text-brand-accent mb-2">
                        <a href="/gallery?category=<?php echo urlencode($category['id']); ?>" class="hover:text-white transition-colors">
                            <?php echo htmlspecialchars($category['title']); ?>
                        </a>
                    </h3>
                    <p class="text-gray-400 mb-4"><?php echo htmlspecialchars($category['description']); ?></p>
                    <div class="text-sm text-gray-500">
                        <?php echo count($categoryItems); ?> foto<?php echo count($categoryItems) !== 1 ? "'s" : ''; ?>
                    </div>
                </div>
                <a href="/gallery?category=<?php echo urlencode($category['id']); ?>" class="px-4 py-2 bg-brand-accent/10 text-brand-accent rounded-lg hover:bg-brand-accent hover:text-brand-dark transition-colors text-sm">
                    Bekijk
                </a>
            </div>

            <?php if (!empty($categoryItems)): ?>
            <div class="mt-4 pt-4 border-t border-white/5">
                <h4 class="text-sm uppercase tracking-wider text-gray-500 mb-3">Foto's in deze categorie:</h4>
                <div class="grid gap-2">
                    <?php foreach ($categoryItems as $item): ?>
                    <a href="/gallery?category=<?php echo urlencode($category['id']); ?>&photo=<?php echo urlencode($item['id']); ?>" class="text-gray-300 hover:text-brand-accent transition-colors text-sm flex items-center group">
                        <svg class="w-4 h-4 mr-2 text-gray-500 group-hover:text-brand-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                        <?php echo htmlspecialchars($item['title']); ?>
                        <span class="ml-2 text-xs text-gray-500">- <?php echo htmlspecialchars($item['description']); ?></span>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="mt-12 bg-white/5 backdrop-blur-md border border-white/10 rounded-xl p-8 text-center">
        <h3 class="text-2xl font-serif text-white mb-4">Begin met Verkennen</h3>
        <p class="text-gray-400 mb-6">
            Klik op een categorie om de foto's te bekijken en meer te leren over de techniek en compositie.
        </p>
        <a href="/gallery" class="inline-block px-8 py-3 bg-brand-accent text-brand-dark font-medium rounded-full hover:bg-brand-accent-hover transition-colors shadow-[0_0_20px_rgba(212,175,55,0.3)] hover:shadow-[0_0_30px_rgba(212,175,55,0.5)]">
            Naar Portfolio
        </a>
    </div>
</div>
