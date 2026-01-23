<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e(SITE_TITLE); ?></title>
    <link rel="stylesheet" href="public/css/styles.css">
</head>
<body class="bg-brand-dark text-brand-light min-h-screen">
    
    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-brand-dark-transparent backdrop-blur-md border-b border-white-10 shadow-lg" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="<?php echo get_page_url('home'); ?>" class="flex items-center gap-2 group">
                        <span class="text-2xl font-serif tracking-widest text-brand-accent group-hover:text-white transition-colors">
                            <?php echo e(PHOTOGRAPHER_INITIALS); ?>
                        </span>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="<?php echo get_page_url('home'); ?>" 
                           class="nav-link <?php echo is_active_page('home') ? 'active' : ''; ?>">
                            Start
                        </a>
                        <a href="<?php echo get_page_url('toc'); ?>" 
                           class="nav-link <?php echo is_active_page('toc') ? 'active' : ''; ?>">
                            Inhoud
                        </a>
                        <a href="<?php echo get_page_url('gallery'); ?>" 
                           class="nav-link <?php echo is_active_page('gallery') ? 'active' : ''; ?>">
                            Portfolio
                        </a>
                        <a href="<?php echo get_page_url('lighting'); ?>" 
                           class="nav-link <?php echo is_active_page('lighting') ? 'active' : ''; ?>">
                            Lichtplan
                        </a>
                        <a href="<?php echo get_page_url('info'); ?>" 
                           class="nav-link <?php echo is_active_page('info') ? 'active' : ''; ?>">
                            Info
                        </a>
                    </div>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-white-10 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-brand-dark-transparent backdrop-blur-md border-b border-white-10">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="<?php echo get_page_url('home'); ?>" 
                   class="mobile-nav-link <?php echo is_active_page('home') ? 'active' : ''; ?>">
                    Start
                </a>
                <a href="<?php echo get_page_url('toc'); ?>" 
                   class="mobile-nav-link <?php echo is_active_page('toc') ? 'active' : ''; ?>">
                    Inhoud
                </a>
                <a href="<?php echo get_page_url('gallery'); ?>" 
                   class="mobile-nav-link <?php echo is_active_page('gallery') ? 'active' : ''; ?>">
                    Portfolio
                </a>
                <a href="<?php echo get_page_url('lighting'); ?>" 
                   class="mobile-nav-link <?php echo is_active_page('lighting') ? 'active' : ''; ?>">
                    Lichtplan
                </a>
                <a href="<?php echo get_page_url('info'); ?>" 
                   class="mobile-nav-link <?php echo is_active_page('info') ? 'active' : ''; ?>">
                    Info
                </a>
            </div>
        </div>
    </nav>

    <main class="pt-20">
