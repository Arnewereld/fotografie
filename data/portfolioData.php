<?php
// Portfolio Data
// Dit bestand bevat alle data voor de fotografie portfolio

// Portfolio Categories for main gallery view
$portfolioCategories = [
    [
        'id' => 'beweging',
        'title' => 'Bewegingsfoto\'s',
        'description' => 'Dynamische beelden die beweging vastleggen',
        'image' => 'images/beweging foto/Bewerkt/jaggggggggg.png'
    ],
    [
        'id' => 'portret',
        'title' => 'Portretten Studio',
        'description' => 'Professionele studioportretten met kunstlicht',
        'image' => 'images/portretten/Bewerkt/image.png'
    ],
    [
        'id' => 'architectuur',
        'title' => 'Architectuur & Landschap',
        'description' => 'Architectuur en landschappen in beeld',
        'image' => 'images/landschap/Bewerkt/image.png'
    ],
    [
        'id' => 'product',
        'title' => 'Productfotografie',
        'description' => 'Studio productfotografie met professionele belichting',
        'image' => 'images/product/Bewerkt/image.png'
    ],
    [
        'id' => 'beste',
        'title' => 'Mijn Mooiste Foto\'s',
        'description' => 'Een selectie van mijn beste werk',
        'image' => 'images/mijn mooiste foto/Bewerkt/image.png'
    ]
];

// Portfolio Items with complete information per assignment requirements
$portfolioItems = [
    // BEWEGINGSFOTO'S
    [
        'id' => 'beweging-001',
        'categoryId' => 'beweging',
        'title' => 'Dynamische Bewegingsfoto',
        'image' => 'images/beweging foto/Origineel/DSC_0012.JPG',
        'imageBefore' => 'images/beweging foto/Bewerkt/jaggggggggg.png',
        
        // 1. What is interesting and why
        'whyInteresting' => 'Wat ik gaaf vind aan deze foto is dat je de beweging echt ziet. Het lijkt alsof de tijd stilstaat terwijl er toch actie in zit. Dat maakt het spannend om naar te kijken.',
        
        // 2. What is good/not good
        'critique' => 'Goed: De beweging is scherp vastgelegd op het juiste moment, het onderwerp is goed te zien. Niet goed: De achtergrond is nog wel een beetje druk, had waziger gemogen.',
        
        // 3-11. Beeldaspecten
        'analysis' => [
            'composition' => 'Het onderwerp staat niet precies in het midden, zo blijft er ruimte over voor de beweging',
            'frame' => 'Liggende foto, dat werkt goed voor beweging',
            'format' => 'Normaal fotoformaat (3:2)',
            'perspective' => 'De foto is gemaakt vanaf een standpunt dat je midden in de actie zet',
            'lightDirection' => 'Het licht komt van de zijkant, zo zie je diepte',
            'intensity' => 'Helder licht met duidelijke schaduwen',
            'lightSource' => 'Zonlicht',
            'depthOfField' => 'Het onderwerp is scherp, de achtergrond wat minder'
        ],
        
        // 12. Edits and why
        'edits' => [
            '1. Foto recht' => 'De foto rechtgezet zodat hij niet scheef staat',
            '2. Bijsnijden' => 'Bijgesneden om de focus op de beweging te houden',
            '3. Licht/Donker' => 'Donkere delen lichter gemaakt (+15), lichte delen goed gehouden',
            '4. Kleuren' => 'Kleuren feller gemaakt (+20) en wat warmer',
            '5. Scherpte' => 'Het hoofdonderwerp scherper gemaakt (+35)',
            '6. Contrast' => 'Meer contrast voor meer spanning in de foto (+15)'
        ],
        
        // Technical specs
        'specs' => [
            'camera' => 'Nikon D3500',
            'lens' => '18-55mm kit lens',
            'shutter' => '1/500s',
            'aperture' => 'f/5.6',
            'iso' => '400',
            'focalLength' => '35mm',
            'whiteBalance' => 'Auto'
        ],
        
        'location' => 'Locatie onbekend',
        'date' => '2026-01-15',
        'description' => 'Een bewegingsfoto vol energie en actie'
    ],
    
    // PORTRETTEN STUDIO
    [
        'id' => 'portret-001',
        'categoryId' => 'portret',
        'title' => 'Studioportret met Natuurlijk Licht',
        'image' => 'images/portretten/Origineel/DSC_0010.JPG',
        'imageBefore' => 'images/portretten/Bewerkt/image.png',
        
        'whyInteresting' => 'Deze portretfoto voelt natuurlijk aan. Je ziet goed de persoonlijkheid van de persoon en het licht valt mooi op het gezicht. Dat maakt de foto warm en uitnodigend.',
        
        'critique' => 'Goed: De uitdrukking is natuurlijk, de ogen zijn scherp en het licht valt mooi. Niet goed: De achtergrond had waziger gemogen, of simpeler, zodat je nog beter op de persoon let.',
        
        'analysis' => [
            'composition' => 'De persoon staat redelijk in het midden',
            'frame' => 'Staande foto, zoals je vaak bij portretten ziet',
            'format' => 'Standaard portretformaat (2:3)',
            'perspective' => 'De foto is gemaakt op ooghoogte, zo kijk je de persoon recht aan',
            'lightDirection' => 'Het licht komt van voren met zachte schaduwen',
            'intensity' => 'Zacht licht',
            'lightSource' => 'Daglicht via een raam of zachte studiolamp',
            'depthOfField' => 'Het gezicht is scherp, de rest wat minder'
        ],
        
        'edits' => [
            '1. Foto recht' => 'De foto rechtgezet zodat de ogen recht zijn',
            '2. Bijsnijden' => 'Bijgesneden naar een goed portretformaat',
            '3. Licht/Donker' => 'Het gezicht lichter gemaakt (+10)',
            '4. Kleuren' => 'Huidskleur natuurlijk gehouden en wat warmte toegevoegd',
            '5. Retoucheren' => 'Kleine correcties, maar wel natuurlijk gehouden',
            '6. Scherpte' => 'De ogen extra scherp gemaakt'
        ],
        
        'specs' => [
            'camera' => 'Nikon D3500',
            'lens' => '18-55mm kit lens',
            'shutter' => '1/125s',
            'aperture' => 'f/5.6',
            'iso' => '400',
            'focalLength' => '50mm',
            'whiteBalance' => 'Auto'
        ],
        
        'location' => 'Studio',
        'date' => '2026-01-18',
        'description' => 'Natuurlijk portret met zachte belichting'
    ],
    
    // ARCHITECTUUR & LANDSCHAP
    [
        'id' => 'landschap-001',
        'categoryId' => 'architectuur',
        'title' => 'Landschapsfotografie',
        'image' => 'images/landschap/Origineel/DSC_0023 (1).JPG',
        'imageBefore' => 'images/landschap/Bewerkt/image.png',
        
        'whyInteresting' => 'Deze foto laat mooi de rust van de natuur zien. Je krijgt een gevoel van ruimte en vrijheid als je ernaar kijkt. Het nodigt uit om de foto rustig te bekijken.',
        
        'critique' => 'Goed: Mooie diepte in de foto, goede verdeling van voorgrond tot achtergrond, natuurlijke kleuren. Niet goed: Het licht had wat gelijkmatiger gemogen, vooral in de donkere delen had meer detail gekund.',
        
        'analysis' => [
            'composition' => 'Liggende foto met duidelijk voorgrond, midden en achtergrond',
            'frame' => 'Breed formaat, ideaal voor landschappen',
            'format' => 'Normaal landschapsformaat (3:2)',
            'perspective' => 'Gewoon oogpunt, geeft goed overzicht',
            'lightDirection' => 'Licht van de zijkant, zo zie je structuur en diepte',
            'intensity' => 'Normaal daglicht',
            'lightSource' => 'Zonlicht',
            'depthOfField' => 'Alles is scherp van voor tot achter'
        ],
        
        'edits' => [
            '1. Foto recht' => 'De horizon recht gezet',
            '2. Bijsnijden' => 'Bijna niet bijgesneden, het landschap blijft compleet',
            '3. Licht/Donker' => 'Donkere delen lichter gemaakt (+20)',
            '4. Kleuren' => 'Natuurlijke kleuren iets feller en de lucht mooier blauw',
            '5. Scherpte' => 'Alles wat scherper voor meer detail (+25)',
            '6. Helderheid' => 'Op een paar plekken aangepast voor betere balans'
        ],
        
        'specs' => [
            'camera' => 'Nikon D3500',
            'lens' => '18-55mm kit lens',
            'shutter' => '1/250s',
            'aperture' => 'f/8',
            'iso' => '200',
            'focalLength' => '24mm',
            'whiteBalance' => 'Daylight'
        ],
        
        'location' => 'Landschap Nederland',
        'date' => '2026-01-12',
        'description' => 'Rustige landschapsfoto met mooie diepte'
    ],
    
    // PRODUCTFOTOGRAFIE
    [
        'id' => 'product-001',
        'categoryId' => 'product',
        'title' => 'Studio Productfotografie',
        'image' => 'images/product/Origineel/DSC_0059.JPG',
        'imageBefore' => 'images/product/Bewerkt/image.png',
        
        'whyInteresting' => 'Een nette productfoto die het product goed laat zien. De witte achtergrond en goede verlichting zorgen dat je alleen op het product let. Perfect voor webshops.',
        
        'critique' => 'Goed: Schone achtergrond, goede verlichting, product mooi in het midden. Niet goed: Het licht had nog iets gelijkmatiger gekund en de schaduw onder het product had weg gekund.',
        
        'analysis' => [
            'composition' => 'Product in het midden met witte ruimte eromheen',
            'frame' => 'Strak om het product heen gefotografeerd',
            'format' => 'Standaard productformaat (4:3)',
            'perspective' => 'Iets van bovenaf, zo zie je het product goed',
            'lightDirection' => 'Licht van meerdere kanten zodat er geen schaduwen zijn',
            'intensity' => 'Gelijkmatig licht',
            'lightSource' => 'Studiolampen met softboxen',
            'depthOfField' => 'Het hele product is scherp'
        ],
        
        'edits' => [
            '1. Foto recht' => 'Product recht gezet voor een nette uitstraling',
            '2. Bijsnijden' => 'Witte rand rondom voor webshop gebruik',
            '3. Licht/Donker' => 'Achtergrond helemaal wit gemaakt',
            '4. Kleuren' => 'Kleuren gecorrigeerd zodat het product echt lijkt',
            '5. Retoucheren' => 'Stofjes en vlekjes weggehaald',
            '6. Scherpte' => 'Product details scherper gemaakt'
        ],
        
        'specs' => [
            'camera' => 'Nikon D3500',
            'lens' => '18-55mm kit lens',
            'shutter' => '1/125s',
            'aperture' => 'f/11',
            'iso' => '200',
            'focalLength' => '40mm',
            'whiteBalance' => '5500K (studio)'
        ],
        
        'location' => 'Studio setup',
        'date' => '2026-01-20',
        'description' => 'Nette productfoto voor een webshop'
    ],
    
    // MIJN MOOISTE FOTO'S
    // Hier voeg je jouw 4-5 beste foto's toe
    [
        'id' => 'beste-001',
        'categoryId' => 'beste',
        'title' => 'Mijn Mooiste Foto #1',
        'image' => 'images/mijn mooiste foto/Origineel/DSC_0109.JPG',
        'imageBefore' => 'images/mijn mooiste foto/Bewerkt/image.png',
        
        'whyInteresting' => 'Dit is een van mijn mooiste foto\'s omdat alles klopt: goede opbouw, mooi licht en een verhaal dat je ziet. Deze foto laat goed zien wat mijn stijl is.',
        
        'critique' => 'Goed: Goede opbouw, precies op het juiste moment gemaakt, mooie kleuren. Niet goed: Een paar kleine technische dingetjes, maar die vallen niet op.',
        
        'analysis' => [
            'composition' => 'Alles in de foto past goed bij elkaar',
            'frame' => 'Goed gekozen hoe de foto is ingekaderd',
            'format' => 'Standaard formaat',
            'perspective' => 'Vanuit een standpunt dat je erbij trekt',
            'lightDirection' => 'Goede lichtrichting voor de sfeer',
            'intensity' => 'Goede hoeveelheid licht',
            'lightSource' => 'Licht goed gebruikt',
            'depthOfField' => 'Goede keuze wat scherp en onscherp is'
        ],
        
        'edits' => [
            '1. Foto recht' => 'Alles mooi recht gezet',
            '2. Bijsnijden' => 'Bijgesneden voor de beste compositie',
            '3. Licht/Donker' => 'Licht en donker goed afgesteld',
            '4. Kleuren' => 'Kleuren aangepast voor meer gevoel',
            '5. Retoucheren' => 'Afleidende dingen weggehaald',
            '6. Finishing touches' => 'Laatste aanpassingen voor nette afwerking'
        ],
        
        'specs' => [
            'camera' => 'Nikon D3500',
            'lens' => '18-55mm kit lens',
            'shutter' => '1/250s',
            'aperture' => 'f/5.6',
            'iso' => '400',
            'focalLength' => '35mm',
            'whiteBalance' => 'Auto'
        ],
        
        'location' => 'Speciale locatie',
        'date' => '2026-01-10',
        'description' => 'Een van mijn beste en mooiste foto\'s'
    ],
    
    // Voeg hier meer foto's toe voor "Mijn Mooiste Foto's" (beste-002, beste-003, beste-004, beste-005)
    // Kopieer het bovenstaande format en pas aan voor elke nieuwe foto
    
    // Add more items for each category as needed
];

// Helper Functions
function getImagesByCategory($categoryId = null) {
    global $portfolioItems;
    
    if ($categoryId === null) {
        return $portfolioItems;
    }
    
    return array_filter($portfolioItems, function($item) use ($categoryId) {
        return $item['categoryId'] === $categoryId;
    });
}

function getImageById($id) {
    global $portfolioItems;
    
    foreach ($portfolioItems as $item) {
        if ($item['id'] === $id) {
            return $item;
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
