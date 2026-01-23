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
        'imageBefore' => 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=800&q=80&sat=-100',
        'description' => 'Een prachtige zonsondergang over de bergen',
        'camera' => 'Canon EOS R5',
        'lens' => '24-70mm f/2.8',
        'settings' => 'f/8, 1/250s, ISO 100',
        'location' => 'Alpen, Zwitserland',
        'date' => '2025-08-15'
    ],
    [
        'id' => 2,
        'title' => 'Urban Dreams',
        'category' => 'urban',
        'image' => 'https://images.unsplash.com/photo-1514565131-fce0801e5785?w=800&q=80',
        'imageBefore' => 'https://images.unsplash.com/photo-1514565131-fce0801e5785?w=800&q=80&sat=-100',
        'description' => 'Stedelijke architectuur in het avondlicht',
        'camera' => 'Sony A7III',
        'lens' => '16-35mm f/4',
        'settings' => 'f/4, 1/60s, ISO 800',
        'location' => 'Amsterdam, Nederland',
        'date' => '2025-09-22'
    ],
    [
        'id' => 3,
        'title' => 'Natural Beauty',
        'category' => 'nature',
        'image' => 'https://images.unsplash.com/photo-1441974231531-c6227db76b6e?w=800&q=80',
        'imageBefore' => 'https://images.unsplash.com/photo-1441974231531-c6227db76b6e?w=800&q=80&sat=-100',
        'description' => 'De schoonheid van de natuur vastgelegd',
        'camera' => 'Nikon Z7',
        'lens' => '70-200mm f/2.8',
        'settings' => 'f/5.6, 1/500s, ISO 200',
        'location' => 'Veluwe, Nederland',
        'date' => '2025-10-05'
    ],
    [
        'id' => 4,
        'title' => 'City Lights',
        'category' => 'urban',
        'image' => 'https://images.unsplash.com/photo-1480714378408-67cf0d13bc1b?w=800&q=80',
        'imageBefore' => 'https://images.unsplash.com/photo-1480714378408-67cf0d13bc1b?w=800&q=80&sat=-100',
        'description' => 'Nachtfotografie in de stad',
        'camera' => 'Canon EOS R6',
        'lens' => '50mm f/1.2',
        'settings' => 'f/1.8, 1/30s, ISO 3200',
        'location' => 'Rotterdam, Nederland',
        'date' => '2025-11-12'
    ],
    [
        'id' => 5,
        'title' => 'Portrait Session',
        'category' => 'portrait',
        'image' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=800&q=80',
        'imageBefore' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=800&q=80&sat=-100',
        'description' => 'Een intense portretfoto',
        'camera' => 'Sony A7RIV',
        'lens' => '85mm f/1.4',
        'settings' => 'f/1.8, 1/200s, ISO 400',
        'location' => 'Studio Amsterdam',
        'date' => '2025-07-30'
    ],
    [
        'id' => 6,
        'title' => 'Mountain View',
        'category' => 'landscape',
        'image' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?w=800&q=80',
        'imageBefore' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?w=800&q=80&sat=-100',
        'description' => 'Berglandschap bij zonsopkomst',
        'camera' => 'Canon EOS R5',
        'lens' => '24-70mm f/2.8',
        'settings' => 'f/11, 1/125s, ISO 100',
        'location' => 'Dolomiten, Italië',
        'date' => '2025-06-18'
    ],
    [
        'id' => 7,
        'title' => 'Forest Path',
        'category' => 'nature',
        'image' => 'https://images.unsplash.com/photo-1511497584788-876760111969?w=800&q=80',
        'imageBefore' => 'https://images.unsplash.com/photo-1511497584788-876760111969?w=800&q=80&sat=-100',
        'description' => 'Een pad door het bos',
        'camera' => 'Fujifilm X-T4',
        'lens' => '18-55mm f/2.8-4',
        'settings' => 'f/4, 1/60s, ISO 400',
        'location' => 'Hoge Veluwe, Nederland',
        'date' => '2025-04-25'
    ],
    [
        'id' => 8,
        'title' => 'Urban Architecture',
        'category' => 'urban',
        'image' => 'https://images.unsplash.com/photo-1449824913935-59a10b8d2000?w=800&q=80',
        'imageBefore' => 'https://images.unsplash.com/photo-1449824913935-59a10b8d2000?w=800&q=80&sat=-100',
        'description' => 'Moderne architectuur',
        'camera' => 'Sony A7III',
        'lens' => '16-35mm f/4',
        'settings' => 'f/8, 1/250s, ISO 200',
        'location' => 'Utrecht, Nederland',
        'date' => '2025-03-10'
    ],
    [
        'id' => 9,
        'title' => 'Portrait Study',
        'category' => 'portrait',
        'image' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=800&q=80',
        'imageBefore' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=800&q=80&sat=-100',
        'description' => 'Studioportret met natuurlijk licht',
        'camera' => 'Canon EOS R6',
        'lens' => '85mm f/1.2',
        'settings' => 'f/2.0, 1/160s, ISO 200',
        'location' => 'Studio Rotterdam',
        'date' => '2025-05-14'
    ],
    [
        'id' => 10,
        'title' => 'Sunset Horizon',
        'category' => 'landscape',
        'image' => 'https://images.unsplash.com/photo-1472214103451-9374bd1c798e?w=800&q=80',
        'imageBefore' => 'https://images.unsplash.com/photo-1472214103451-9374bd1c798e?w=800&q=80&sat=-100',
        'description' => 'Horizon bij zonsondergang',
        'camera' => 'Nikon Z7',
        'lens' => '24-70mm f/2.8',
        'settings' => 'f/11, 1/200s, ISO 64',
        'location' => 'Scheveningen, Nederland',
        'date' => '2025-08-28'
    ],
    [
        'id' => 11,
        'title' => 'Waterfall Wonder',
        'category' => 'nature',
        'image' => 'https://images.unsplash.com/photo-1433086966358-54859d0ed716?w=800&q=80',
        'imageBefore' => 'https://images.unsplash.com/photo-1433086966358-54859d0ed716?w=800&q=80&sat=-100',
        'description' => 'Een waterval in de natuur',
        'camera' => 'Canon EOS R5',
        'lens' => '24-105mm f/4',
        'settings' => 'f/16, 2s, ISO 100',
        'location' => 'IJsland',
        'date' => '2025-09-03'
    ],
    [
        'id' => 12,
        'title' => 'Street Photography',
        'category' => 'urban',
        'image' => 'https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?w=800&q=80',
        'imageBefore' => 'https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?w=800&q=80&sat=-100',
        'description' => 'Straatfotografie in de stad',
        'camera' => 'Fujifilm X100V',
        'lens' => '23mm f/2',
        'settings' => 'f/2.8, 1/500s, ISO 200',
        'location' => 'Den Haag, Nederland',
        'date' => '2025-10-19'
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
