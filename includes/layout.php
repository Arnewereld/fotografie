<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fotografie Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'brand-dark': '#050505',
                        'brand-light': '#f5f5f7',
                        'brand-accent': '#d4af37',
                        'brand-accent-hover': '#b59326',
                    },
                    fontFamily: {
                        'sans': ['Outfit', 'sans-serif'],
                        'serif': ['Playfair Display', 'serif'],
                    }
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #050505;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.05'/%3E%3C/svg%3E");
        }
        html {
            scroll-behavior: smooth;
        }
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background-color: #050505;
        }
        ::-webkit-scrollbar-thumb {
            background-color: rgba(212, 175, 55, 0.3);
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background-color: rgba(212, 175, 55, 0.6);
        }
        ::selection {
            background-color: rgba(212, 175, 55, 0.3);
            color: white;
        }
        .fade-in {
            animation: fadeIn 0.8s ease-out;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body class="min-h-screen flex flex-col bg-brand-dark text-brand-light font-sans antialiased overflow-x-hidden">
    <?php include 'includes/header.php'; ?>
    
    <main class="flex-grow pt-20">
        <?php include $page; ?>
    </main>
    
    <?php include 'includes/footer.php'; ?>
    
    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        
        if (mobileMenuBtn) {
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }

        // Navbar scroll effect
        let lastScroll = 0;
        const navbar = document.getElementById('navbar');
        
        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;
            
            if (currentScroll > 20) {
                navbar.classList.add('bg-brand-dark/95', 'backdrop-blur-md', 'border-b', 'border-white/10', 'shadow-lg');
            } else {
                navbar.classList.remove('bg-brand-dark/95', 'backdrop-blur-md', 'border-b', 'border-white/10', 'shadow-lg');
            }
            
            lastScroll = currentScroll;
        });
    </script>
</body>
</html>
