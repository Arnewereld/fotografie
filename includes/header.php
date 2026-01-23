<?php
$currentRoute = $_GET['route'] ?? '';
$currentRoute = trim($currentRoute, '/');

function isActive($route, $currentRoute) {
    return $route === $currentRoute ? 'text-brand-accent' : 'text-gray-300 hover:text-white';
}

function isActiveUnderline($route, $currentRoute) {
    return $route === $currentRoute ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100';
}
?>

<nav id="navbar" class="fixed w-full z-50 transition-all duration-300 ease-in-out">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            
            <!-- Logo Area -->
            <div class="flex-shrink-0">
                <a href="/" class="flex items-center gap-2 group">
                    <span class="text-2xl font-serif tracking-widest text-brand-accent group-hover:text-white transition-colors duration-300">
                        IVR
                    </span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-8">
                    <a href="/" class="relative px-1 py-2 text-sm font-medium tracking-wide uppercase transition-colors duration-300 group <?php echo isActive('', $currentRoute); ?>">
                        Start
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-brand-accent transform origin-left transition-transform duration-300 ease-out <?php echo isActiveUnderline('', $currentRoute); ?>"></span>
                    </a>
                    <a href="/toc" class="relative px-1 py-2 text-sm font-medium tracking-wide uppercase transition-colors duration-300 group <?php echo isActive('toc', $currentRoute); ?>">
                        Inhoud
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-brand-accent transform origin-left transition-transform duration-300 ease-out <?php echo isActiveUnderline('toc', $currentRoute); ?>"></span>
                    </a>
                    <a href="/gallery" class="relative px-1 py-2 text-sm font-medium tracking-wide uppercase transition-colors duration-300 group <?php echo isActive('gallery', $currentRoute); ?>">
                        Portfolio
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-brand-accent transform origin-left transition-transform duration-300 ease-out <?php echo isActiveUnderline('gallery', $currentRoute); ?>"></span>
                    </a>
                    <a href="/lighting" class="relative px-1 py-2 text-sm font-medium tracking-wide uppercase transition-colors duration-300 group <?php echo isActive('lighting', $currentRoute); ?>">
                        Lichtplan
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-brand-accent transform origin-left transition-transform duration-300 ease-out <?php echo isActiveUnderline('lighting', $currentRoute); ?>"></span>
                    </a>
                    <a href="/info" class="relative px-1 py-2 text-sm font-medium tracking-wide uppercase transition-colors duration-300 group <?php echo isActive('info', $currentRoute); ?>">
                        Info
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-brand-accent transform origin-left transition-transform duration-300 ease-out <?php echo isActiveUnderline('info', $currentRoute); ?>"></span>
                    </a>
                </div>
            </div>

            <!-- Mobile Menu Button -->
            <div class="-mr-2 flex md:hidden">
                <button id="mobile-menu-btn" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-brand-accent transition-colors">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1 bg-brand-dark/95 backdrop-blur-md border-b border-white/10 shadow-xl">
            <a href="/" class="block px-3 py-2 rounded-md text-base font-medium transition-colors <?php echo $currentRoute === '' ? 'bg-white/10 text-brand-accent' : 'text-gray-300 hover:text-white hover:bg-white/5'; ?>">Start</a>
            <a href="/toc" class="block px-3 py-2 rounded-md text-base font-medium transition-colors <?php echo $currentRoute === 'toc' ? 'bg-white/10 text-brand-accent' : 'text-gray-300 hover:text-white hover:bg-white/5'; ?>">Inhoud</a>
            <a href="/gallery" class="block px-3 py-2 rounded-md text-base font-medium transition-colors <?php echo $currentRoute === 'gallery' ? 'bg-white/10 text-brand-accent' : 'text-gray-300 hover:text-white hover:bg-white/5'; ?>">Portfolio</a>
            <a href="/lighting" class="block px-3 py-2 rounded-md text-base font-medium transition-colors <?php echo $currentRoute === 'lighting' ? 'bg-white/10 text-brand-accent' : 'text-gray-300 hover:text-white hover:bg-white/5'; ?>">Lichtplan</a>
            <a href="/info" class="block px-3 py-2 rounded-md text-base font-medium transition-colors <?php echo $currentRoute === 'info' ? 'bg-white/10 text-brand-accent' : 'text-gray-300 hover:text-white hover:bg-white/5'; ?>">Info</a>
        </div>
    </div>
</nav>
