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

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 min-h-screen fade-in" style="margin-top: 80px;">
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
            <!-- Before/After Slider -->
            <div class="mb-8">
                <h2 class="text-white text-2xl font-serif mb-2"><?php echo htmlspecialchars($photoDetails['title']); ?></h2>
                <h3 class="text-brand-accent text-lg mb-6">Voor & Na Bewerking</h3>
                <div class="relative rounded-lg overflow-hidden" style="background: #000;">
                    <div id="comparison-slider" class="relative" style="height: 700px; width: 100%; background: #000;">
                        <!-- Before Image (origineel) - base layer LINKS -->
                        <img src="<?php echo htmlspecialchars($photoDetails['imageBefore']); ?>" alt="Voor bewerking" class="absolute inset-0 w-full h-full object-contain" style="user-select: none; pointer-events: none;">
                        
                        <!-- After Image (bewerkt) with clip - RECHTS -->
                        <div id="after-image-container" class="absolute inset-0" style="clip-path: inset(0 50% 0 0); overflow: hidden;">
                            <img src="<?php echo htmlspecialchars($photoDetails['image']); ?>" alt="Na bewerking" class="absolute inset-0 w-full h-full object-contain" style="user-select: none; pointer-events: none;">
                        </div>
                        
                        <!-- Slider -->
                        <div id="slider-line" class="absolute top-0 bottom-0 w-1 cursor-ew-resize z-20" style="left: 50%; transform: translateX(-50%); background: #e74c3c;">
                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-12 h-12 rounded-full flex items-center justify-center shadow-lg" style="background: #e74c3c;">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4"></path>
                                </svg>
                            </div>
                        </div>
                        
                        <!-- Labels -->
                        <div class="absolute top-4 left-4 bg-black/70 px-3 py-1 rounded text-white text-sm z-10">Voor</div>
                        <div class="absolute top-4 right-4 bg-black/70 px-3 py-1 rounded text-white text-sm z-10">Na</div>
                    </div>
                    
                    <button onclick="openFullscreen()" class="absolute bottom-4 right-4 p-2 bg-black/70 hover:bg-black transition-colors z-30 rounded-full" style="border: 2px solid #e74c3c;">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Left Column -->
                <div class="text-white space-y-6">
                    <div class="bg-black/30 rounded-lg p-6">
                        <h3 class="text-brand-accent uppercase tracking-wider text-sm mb-3">Over Deze Foto</h3>
                        <p class="text-gray-300 text-sm">
                            <span class="text-gray-400">Locatie:</span> <span class="text-white"><?php echo htmlspecialchars($photoDetails['location']); ?></span><br>
                            <span class="text-gray-400">Datum:</span> <span class="text-white"><?php echo htmlspecialchars($photoDetails['date']); ?></span>
                        </p>
                    </div>
                    
                    <div class="bg-black/30 rounded-lg p-6">
                        <h3 class="text-brand-accent uppercase tracking-wider text-sm mb-3">Beschrijving</h3>
                        <p class="text-gray-300"><?php echo htmlspecialchars($photoDetails['description']); ?></p>
                    </div>

                    <!-- Technical Specs -->
                    <div class="bg-black/30 rounded-lg p-6">
                        <h3 class="text-brand-accent uppercase tracking-wider text-sm mb-4">Technische Specificaties</h3>
                        <div class="grid grid-cols-2 gap-3 text-sm">
                            <div><span class="text-gray-400">Camera:</span> <span class="text-white block mt-1"><?php echo htmlspecialchars($photoDetails['specs']['camera']); ?></span></div>
                            <div><span class="text-gray-400">Lens:</span> <span class="text-white block mt-1"><?php echo htmlspecialchars($photoDetails['specs']['lens']); ?></span></div>
                            <div><span class="text-gray-400">Sluitertijd:</span> <span class="text-white block mt-1"><?php echo htmlspecialchars($photoDetails['specs']['shutter']); ?></span></div>
                            <div><span class="text-gray-400">Diafragma:</span> <span class="text-white block mt-1"><?php echo htmlspecialchars($photoDetails['specs']['aperture']); ?></span></div>
                            <div><span class="text-gray-400">ISO:</span> <span class="text-white block mt-1"><?php echo htmlspecialchars($photoDetails['specs']['iso']); ?></span></div>
                            <div><span class="text-gray-400">Brandpunt:</span> <span class="text-white block mt-1"><?php echo htmlspecialchars($photoDetails['specs']['focalLength']); ?></span></div>
                        </div>
                    </div>

                    <!-- Why Interesting -->
                    <div class="bg-black/30 rounded-lg p-6">
                        <h3 class="text-brand-accent uppercase tracking-wider text-sm mb-3">Waarom Interessant</h3>
                        <p class="text-gray-300 text-sm leading-relaxed"><?php echo htmlspecialchars($photoDetails['whyInteresting']); ?></p>
                    </div>

                    <!-- Critique -->
                    <div class="bg-black/30 rounded-lg p-6">
                        <h3 class="text-brand-accent uppercase tracking-wider text-sm mb-3">Zelfreflectie</h3>
                        <p class="text-gray-300 text-sm leading-relaxed"><?php echo htmlspecialchars($photoDetails['critique']); ?></p>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="text-white space-y-6">
                    <!-- Beeldaspecten Analysis -->
                    <div class="bg-black/30 rounded-lg p-6">
                        <h3 class="text-brand-accent uppercase tracking-wider text-sm mb-4">Beeldaspecten</h3>
                        <div class="space-y-3 text-sm">
                            <div class="border-b border-white/10 pb-3">
                                <span class="text-gray-400 block mb-1">Compositie</span>
                                <span class="text-white"><?php echo htmlspecialchars($photoDetails['analysis']['composition']); ?></span>
                            </div>
                            <div class="border-b border-white/10 pb-3">
                                <span class="text-gray-400 block mb-1">Kader</span>
                                <span class="text-white"><?php echo htmlspecialchars($photoDetails['analysis']['frame']); ?></span>
                            </div>
                            <div class="border-b border-white/10 pb-3">
                                <span class="text-gray-400 block mb-1">Formaat</span>
                                <span class="text-white"><?php echo htmlspecialchars($photoDetails['analysis']['format']); ?></span>
                            </div>
                            <div class="border-b border-white/10 pb-3">
                                <span class="text-gray-400 block mb-1">Perspectief</span>
                                <span class="text-white"><?php echo htmlspecialchars($photoDetails['analysis']['perspective']); ?></span>
                            </div>
                            <div class="border-b border-white/10 pb-3">
                                <span class="text-gray-400 block mb-1">Lichtrichting</span>
                                <span class="text-white"><?php echo htmlspecialchars($photoDetails['analysis']['lightDirection']); ?></span>
                            </div>
                            <div class="border-b border-white/10 pb-3">
                                <span class="text-gray-400 block mb-1">Intensiteit</span>
                                <span class="text-white"><?php echo htmlspecialchars($photoDetails['analysis']['intensity']); ?></span>
                            </div>
                            <div class="border-b border-white/10 pb-3">
                                <span class="text-gray-400 block mb-1">Lichtbron</span>
                                <span class="text-white"><?php echo htmlspecialchars($photoDetails['analysis']['lightSource']); ?></span>
                            </div>
                            <div>
                                <span class="text-gray-400 block mb-1">Scherptediepte</span>
                                <span class="text-white"><?php echo htmlspecialchars($photoDetails['analysis']['depthOfField']); ?></span>
                            </div>
                        </div>
                    </div>

                    <!-- Bewerkingen (Edits) -->
                    <div class="bg-black/30 rounded-lg p-6">
                        <h3 class="text-brand-accent uppercase tracking-wider text-sm mb-4">Bewerkingen</h3>
                        <div class="space-y-3 text-sm">
                            <?php foreach ($photoDetails['edits'] as $editName => $editDescription): ?>
                            <div class="flex items-start">
                                <span class="text-brand-accent mr-2">•</span>
                                <div>
                                    <span class="text-white font-semibold block"><?php echo htmlspecialchars($editName); ?></span>
                                    <span class="text-gray-400"><?php echo htmlspecialchars($editDescription); ?></span>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Fullscreen Photo Viewer -->
<div id="fullscreen-viewer" class="hidden fixed inset-0 z-[100] bg-black">
    <button onclick="closeFullscreen()" class="absolute top-4 right-4 z-10 p-3 bg-black/70 hover:bg-black/90 rounded-full text-white transition-colors">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>
    
    <!-- Before/After slider in fullscreen -->
    <div class="w-full h-full flex items-center justify-center p-4">
        <div id="fullscreen-comparison" class="relative w-full h-full">
            <!-- Before Image (origineel) - base layer LINKS -->
            <img id="fullscreen-before" src="" alt="Voor bewerking" class="absolute inset-0 w-full h-full object-contain" style="user-select: none; pointer-events: none;">
            
            <!-- After Image (bewerkt) with clip - RECHTS -->
            <div id="fullscreen-after-container" class="absolute inset-0" style="clip-path: inset(0 50% 0 0); overflow: hidden;">
                <img id="fullscreen-after" src="" alt="Na bewerking" class="absolute inset-0 w-full h-full object-contain" style="user-select: none; pointer-events: none;">
            </div>
            
            <!-- Slider -->
            <div id="fullscreen-slider-line" class="absolute top-0 bottom-0 w-1 cursor-ew-resize z-20" style="left: 50%; transform: translateX(-50%); background: #e74c3c;">
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-12 h-12 rounded-full flex items-center justify-center shadow-lg" style="background: #e74c3c;">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4"></path>
                    </svg>
                </div>
            </div>
            
            <!-- Labels -->
            <div class="absolute top-4 left-4 bg-black/70 px-3 py-1 rounded text-white text-sm z-10">Voor</div>
            <div class="absolute top-4 right-4 bg-black/70 px-3 py-1 rounded text-white text-sm z-10">Na</div>
        </div>
    </div>
</div>

<script>
// Before/After Slider
const slider = document.getElementById('comparison-slider');
const sliderLine = document.getElementById('slider-line');
const afterContainer = document.getElementById('after-image-container');

if (slider && sliderLine && afterContainer) {
    let isDragging = false;

    function updateSlider(e) {
        const rect = slider.getBoundingClientRect();
        let x = e.clientX - rect.left;
        
        // Clamp between 0 and width
        x = Math.max(0, Math.min(x, rect.width));
        
        const percentage = (x / rect.width) * 100;
        
        sliderLine.style.left = percentage + '%';
        afterContainer.style.clipPath = `inset(0 ${100 - percentage}% 0 0)`;
    }

    sliderLine.addEventListener('mousedown', () => {
        isDragging = true;
    });

    document.addEventListener('mouseup', () => {
        isDragging = false;
    });

    slider.addEventListener('mousemove', (e) => {
        if (isDragging) {
            updateSlider(e);
        }
    });

    slider.addEventListener('click', (e) => {
        updateSlider(e);
    });

    // Touch support
    sliderLine.addEventListener('touchstart', (e) => {
        isDragging = true;
        e.preventDefault();
    });

    document.addEventListener('touchend', () => {
        isDragging = false;
    });

    slider.addEventListener('touchmove', (e) => {
        if (isDragging) {
            const touch = e.touches[0];
            const rect = slider.getBoundingClientRect();
            let x = touch.clientX - rect.left;
            
            x = Math.max(0, Math.min(x, rect.width));
            const percentage = (x / rect.width) * 100;
            
            sliderLine.style.left = percentage + '%';
            afterContainer.style.clipPath = `inset(0 ${100 - percentage}% 0 0)`;
        }
    });
}

// Fullscreen functionality
function openFullscreen() {
    const viewer = document.getElementById('fullscreen-viewer');
    const fullscreenBefore = document.getElementById('fullscreen-before');
    const fullscreenAfter = document.getElementById('fullscreen-after');
    
    // Get the current photo details
    fullscreenBefore.src = '<?php echo htmlspecialchars($photoDetails['imageBefore']); ?>';
    fullscreenAfter.src = '<?php echo htmlspecialchars($photoDetails['image']); ?>';
    
    viewer.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
    
    // Initialize fullscreen slider
    initFullscreenSlider();
}

function initFullscreenSlider() {
    const fullscreenComparison = document.getElementById('fullscreen-comparison');
    const fullscreenSliderLine = document.getElementById('fullscreen-slider-line');
    const fullscreenAfterContainer = document.getElementById('fullscreen-after-container');
    
    if (!fullscreenComparison || !fullscreenSliderLine || !fullscreenAfterContainer) return;
    
    let isFullscreenDragging = false;
    
    function updateFullscreenSlider(e) {
        const rect = fullscreenComparison.getBoundingClientRect();
        let x = e.clientX - rect.left;
        
        x = Math.max(0, Math.min(x, rect.width));
        const percentage = (x / rect.width) * 100;
        
        fullscreenSliderLine.style.left = percentage + '%';
        fullscreenAfterContainer.style.clipPath = `inset(0 ${100 - percentage}% 0 0)`;
    }
    
    fullscreenSliderLine.addEventListener('mousedown', () => {
        isFullscreenDragging = true;
    });
    
    document.addEventListener('mouseup', () => {
        isFullscreenDragging = false;
    });
    
    fullscreenComparison.addEventListener('mousemove', (e) => {
        if (isFullscreenDragging) {
            updateFullscreenSlider(e);
        }
    });
    
    fullscreenComparison.addEventListener('click', (e) => {
        updateFullscreenSlider(e);
    });
    
    // Touch support
    fullscreenSliderLine.addEventListener('touchstart', (e) => {
        isFullscreenDragging = true;
        e.preventDefault();
    });
    
    fullscreenComparison.addEventListener('touchmove', (e) => {
        if (isFullscreenDragging) {
            const touch = e.touches[0];
            const rect = fullscreenComparison.getBoundingClientRect();
            let x = touch.clientX - rect.left;
            
            x = Math.max(0, Math.min(x, rect.width));
            const percentage = (x / rect.width) * 100;
            
            fullscreenSliderLine.style.left = percentage + '%';
            fullscreenAfterContainer.style.clipPath = `inset(0 ${100 - percentage}% 0 0)`;
        }
    });
}

function closeFullscreen() {
    const viewer = document.getElementById('fullscreen-viewer');
    viewer.classList.add('hidden');
    document.body.style.overflow = '';
}

// Close fullscreen on Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeFullscreen();
    }
});

// Close fullscreen on click outside image
document.getElementById('fullscreen-viewer')?.addEventListener('click', function(e) {
    if (e.target === this) {
        closeFullscreen();
    }
});
</script>
<?php endif; ?>
