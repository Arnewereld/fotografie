<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-24 min-h-screen flex flex-col items-center justify-center text-center">
    
    <!-- 404 Icon -->
    <div class="mb-8 fade-in">
        <svg class="w-32 h-32 text-brand-accent opacity-50 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
    </div>

    <!-- 404 Message -->
    <h1 class="text-6xl md:text-8xl font-serif text-white mb-4 fade-in-up">404</h1>
    <h2 class="text-2xl md:text-3xl font-serif text-gray-400 mb-8 fade-in-up" style="animation-delay: 0.1s">
        Pagina niet gevonden
    </h2>
    <p class="text-gray-500 mb-12 max-w-md fade-in-up" style="animation-delay: 0.2s">
        De pagina die u zoekt bestaat niet of is verplaatst. 
        Gebruik de navigatie om terug te keren naar het portfolio.
    </p>

    <!-- Actions -->
    <div class="flex flex-col sm:flex-row gap-4 fade-in-up" style="animation-delay: 0.3s">
        <a href="<?php echo get_page_url('home'); ?>" 
           class="px-8 py-3 bg-brand-accent text-brand-dark font-medium rounded-full hover:bg-brand-accent-hover transition-all shadow-glow hover:shadow-glow-strong">
            Terug naar home
        </a>
        <a href="<?php echo get_page_url('gallery'); ?>" 
           class="px-8 py-3 border border-white-20 text-white rounded-full hover:bg-white-10 transition-colors">
            Bekijk portfolio
        </a>
    </div>

</div>
