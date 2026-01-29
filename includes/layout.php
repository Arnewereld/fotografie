<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? e($pageTitle) . ' - ' : ''; ?>Arne Meevis Fotografie</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'brand-accent': '#e74c3c',
                        'neutral': {
                            900: '#1a1a1a',
                        }
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="<?php echo url('css/style.css?v=' . time()); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <?php include __DIR__ . '/navbar.php'; ?>
    
    <main>
        <?php echo $content; ?>
    </main>
    
    <?php include __DIR__ . '/footer.php'; ?>
    
    <!-- Lightbox Modal -->
    <div id="lightbox" class="lightbox">
        <span class="lightbox-close">&times;</span>
        <img class="lightbox-content" id="lightbox-img">
        <div class="lightbox-caption"></div>
        <a class="lightbox-prev">&#10094;</a>
        <a class="lightbox-next">&#10095;</a>
    </div>
    
    <script src="<?php echo url('js/script.js'); ?>"></script>
</body>
</html>
