<?php
// Portfolio Data
// Dit bestand bevat alle data voor de fotografie portfolio

// Gallery Images
$galleryImages = [
    [
        'id' => 1,
        'title' => 'Golden Hour',
        'category' => 'landscape',
        'image' => 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=800&q=80',
        'description' => 'Een prachtige zonsondergang over de bergen'
    ],
    [
        'id' => 2,
        'title' => 'Urban Dreams',
        'category' => 'urban',
        'image' => 'https://images.unsplash.com/photo-1514565131-fce0801e5785?w=800&q=80',
        'description' => 'Stedelijke architectuur in het avondlicht'
    ],
    [
        'id' => 3,
        'title' => 'Natural Beauty',
        'category' => 'nature',
        'image' => 'https://images.unsplash.com/photo-1441974231531-c6227db76b6e?w=800&q=80',
        'description' => 'De schoonheid van de natuur vastgelegd'
    ],
    [
        'id' => 4,
        'title' => 'City Lights',
        'category' => 'urban',
        'image' => 'https://images.unsplash.com/photo-1480714378408-67cf0d13bc1b?w=800&q=80',
        'description' => 'Nachtfotografie in de stad'
    ],
    [
        'id' => 5,
        'title' => 'Portrait Session',
        'category' => 'portrait',
        'image' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=800&q=80',
        'description' => 'Een intense portretfoto'
    ],
    [
        'id' => 6,
        'title' => 'Mountain View',
        'category' => 'landscape',
        'image' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?w=800&q=80',
        'description' => 'Berglandschap bij zonsopkomst'
    ],
    [
        'id' => 7,
        'title' => 'Forest Path',
        'category' => 'nature',
        'image' => 'https://images.unsplash.com/photo-1511497584788-876760111969?w=800&q=80',
        'description' => 'Een pad door het bos'
    ],
    [
        'id' => 8,
        'title' => 'Urban Architecture',
        'category' => 'urban',
        'image' => 'https://images.unsplash.com/photo-1449824913935-59a10b8d2000?w=800&q=80',
        'description' => 'Moderne architectuur'
    ],
    [
        'id' => 9,
        'title' => 'Portrait Study',
        'category' => 'portrait',
        'image' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=800&q=80',
        'description' => 'Studioportret met natuurlijk licht'
    ],
    [
        'id' => 10,
        'title' => 'Sunset Horizon',
        'category' => 'landscape',
        'image' => 'https://images.unsplash.com/photo-1472214103451-9374bd1c798e?w=800&q=80',
        'description' => 'Horizon bij zonsondergang'
    ],
    [
        'id' => 11,
        'title' => 'Waterfall Wonder',
        'category' => 'nature',
        'image' => 'https://images.unsplash.com/photo-1433086966358-54859d0ed716?w=800&q=80',
        'description' => 'Een waterval in de natuur'
    ],
    [
        'id' => 12,
        'title' => 'Street Photography',
        'category' => 'urban',
        'image' => 'https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?w=800&q=80',
        'description' => 'Straatfotografie in de stad'
    ]
];

// Categories
$categories = [
    'all' => 'Alles',
    'portrait' => 'Portret',
    'landscape' => 'Landschap',
    'nature' => 'Natuur',
    'urban' => 'Stedelijk'
];

// Helper functions
function getImagesByCategory($category = 'all') {
    global $galleryImages;
    
    if ($category === 'all') {
        return $galleryImages;
    }
    
    return array_filter($galleryImages, function($image) use ($category) {
        return $image['category'] === $category;
    });
}

function getImageById($id) {
    global $galleryImages;
    
    foreach ($galleryImages as $image) {
        if ($image['id'] == $id) {
            return $image;
        }
    }
    
    return null;
}

// Security helper
function e($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

// URL helper
function url($path = '') {
    $base = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
    return $base . '/' . ltrim($path, '/');
}
?>
