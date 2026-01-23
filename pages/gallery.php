<?php
require_once 'data/portfolioData.php';

$selectedCategory = $_GET['category'] ?? null;
$selectedPhoto = $_GET['photo'] ?? null;

$filteredItems = [];
if ($selectedCategory) {
    foreach ($portfolioItems as $item) {
        if ($item['categoryId'] === $selectedCategory) {
            $filteredItems[] = $item;
        }
    }
}

// Get selected photo details
$photoDetails = null;
if ($selectedPhoto) {
    foreach ($portfolioItems as $item) {
        if ($item['id'] === $selectedPhoto) {
            $photoDetails = $item;
            break;
        }
    }
}
?>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 min-h-screen fade-in">
    <!-- Header / Breadcrumbs -->
    <div class="mb-12 flex items-center justify-between">
        <div class="flex items-center space-x-4">
            <?php if ($selectedCategory): ?>
                <a href="/gallery" class="flex items-center text-gray-400 hover:text-white transition-colors group">
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

        <?php if ($selectedCategory): 
            $categoryTitle = '';
            foreach ($portfolioCategories as $cat) {
                if ($cat['id'] === $selectedCategory) {
                    $categoryTitle = $cat['title'];
                    break;
                }
            }
        ?>
            <h2 class="text-3xl font-serif text-brand-accent hidden md:block"><?php echo htmlspecialchars($categoryTitle); ?></h2>
        <?php endif; ?>
    </div>

    <?php if (!$selectedCategory): ?>
        <!-- Categories Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($portfolioCategories as $category): ?>
            <a href="/gallery?category=<?php echo urlencode($category['id']); ?>" class="group relative aspect-[4/5] overflow-hidden rounded-2xl bg-neutral-900 border border-white/5 hover:border-brand-accent/50 transition-all duration-500 text-left shadow-2xl hover:shadow-[0_0_30px_rgba(212,175,55,0.15)]">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent z-10"></div>

                <!-- Background Image -->
                <div class="absolute inset-0">
                    <img src="<?php echo htmlspecialchars($category['image']); ?>" alt="<?php echo htmlspecialchars($category['title']); ?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-60">
                </div>

                <div class="absolute bottom-0 left-0 p-8 z-20 w-full transform translate-y-2 group-hover:translate-y-0 transition-transform duration-500">
                    <h3 class="text-3xl font-serif text-white group-hover:text-brand-accent transition-colors mb-2">
                        <?php echo htmlspecialchars($category['title']); ?>
                    </h3>
                    <p class="text-gray-400 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">
                        <?php echo htmlspecialchars($category['description']); ?>
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
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <p>Nog geen foto's in deze categorie.</p>
                </div>
            <?php else: ?>
                <?php foreach ($filteredItems as $item): ?>
                <a href="/gallery?category=<?php echo urlencode($selectedCategory); ?>&photo=<?php echo urlencode($item['id']); ?>" class="group relative aspect-[4/5] overflow-hidden rounded-xl bg-neutral-900 border border-white/5 shadow-lg hover:shadow-xl transition-all">
                    <img src="<?php echo htmlspecialchars($item['image']); ?>" alt="<?php echo htmlspecialchars($item['title']); ?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center backdrop-blur-sm">
                        <span class="text-brand-accent font-serif text-xl italic mb-2 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            <?php echo htmlspecialchars($item['title']); ?>
                        </span>
                        <span class="text-white text-xs tracking-widest uppercase border border-white/30 px-4 py-2 rounded-full hover:bg-white hover:text-black transition-colors">
                            Bekijk Details
                        </span>
                    </div>
                </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</div>

<!-- Photo Detail Modal -->
<?php if ($photoDetails): ?>
<div id="photo-modal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/95 backdrop-blur-sm">
    <div class="relative w-full max-w-6xl max-h-[90vh] overflow-y-auto bg-neutral-900 rounded-2xl shadow-2xl">
        <button onclick="window.location.href='/gallery?category=<?php echo urlencode($selectedCategory); ?>'" class="absolute top-4 right-4 z-10 p-2 bg-black/50 hover:bg-black/70 rounded-full text-white transition-colors">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <div class="p-8">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Image -->
                <div class="relative">
                    <img src="<?php echo htmlspecialchars($photoDetails['image']); ?>" alt="<?php echo htmlspecialchars($photoDetails['title']); ?>" class="w-full rounded-lg">
                </div>

                <!-- Details -->
                <div class="text-white">
                    <h2 class="text-3xl font-serif text-brand-accent mb-4"><?php echo htmlspecialchars($photoDetails['title']); ?></h2>
                    
                    <div class="mb-6">
                        <p class="text-gray-300"><?php echo htmlspecialchars($photoDetails['description']); ?></p>
                    </div>

                    <!-- Specs -->
                    <div class="mb-6 p-4 bg-black/30 rounded-lg">
                        <h3 class="text-sm uppercase tracking-wider text-brand-accent mb-3">Camera Instellingen</h3>
                        <div class="grid grid-cols-2 gap-2 text-sm">
                            <div><span class="text-gray-400">Sluitertijd:</span> <span class="text-white"><?php echo htmlspecialchars($photoDetails['specs']['shutter']); ?></span></div>
                            <div><span class="text-gray-400">Diafragma:</span> <span class="text-white"><?php echo htmlspecialchars($photoDetails['specs']['aperture']); ?></span></div>
                            <div><span class="text-gray-400">ISO:</span> <span class="text-white"><?php echo htmlspecialchars($photoDetails['specs']['iso']); ?></span></div>
                            <div><span class="text-gray-400">Camera:</span> <span class="text-white"><?php echo htmlspecialchars($photoDetails['specs']['camera']); ?></span></div>
                        </div>
                    </div>

                    <!-- Why Interesting -->
                    <div class="mb-6">
                        <h3 class="text-sm uppercase tracking-wider text-brand-accent mb-2">Waarom Interessant</h3>
                        <p class="text-gray-300 text-sm"><?php echo htmlspecialchars($photoDetails['whyInteresting']); ?></p>
                    </div>

                    <!-- Critique -->
                    <div class="mb-6">
                        <h3 class="text-sm uppercase tracking-wider text-brand-accent mb-2">Kritiek</h3>
                        <p class="text-gray-300 text-sm"><?php echo htmlspecialchars($photoDetails['critique']); ?></p>
                    </div>

                    <!-- Analysis -->
                    <div class="mb-6">
                        <h3 class="text-sm uppercase tracking-wider text-brand-accent mb-3">Analyse</h3>
                        <div class="space-y-2 text-sm">
                            <div><span class="text-gray-400">Compositie:</span> <span class="text-white"><?php echo htmlspecialchars($photoDetails['analysis']['composition']); ?></span></div>
                            <div><span class="text-gray-400">Kader:</span> <span class="text-white"><?php echo htmlspecialchars($photoDetails['analysis']['frame']); ?></span></div>
                            <div><span class="text-gray-400">Formaat:</span> <span class="text-white"><?php echo htmlspecialchars($photoDetails['analysis']['format']); ?></span></div>
                            <div><span class="text-gray-400">Perspectief:</span> <span class="text-white"><?php echo htmlspecialchars($photoDetails['analysis']['perspective']); ?></span></div>
                            <div><span class="text-gray-400">Scherptediepte:</span> <span class="text-white"><?php echo htmlspecialchars($photoDetails['analysis']['depthOfField']); ?></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
