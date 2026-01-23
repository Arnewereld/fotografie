<?php
/**
 * Portfolio data - Categories and Items
 */

$portfolioCategories = [
    [
        'id' => 'motion',
        'title' => 'Bewegingsfoto\'s',
        'description' => 'Dynamiek en snelheid vastgelegd in een enkel moment.',
        'image' => 'https://images.unsplash.com/photo-1461896836934-ffe607ba8211?q=80&w=2070&auto=format&fit=crop'
    ],
    [
        'id' => 'portrait',
        'title' => 'Portretten Studio',
        'description' => 'Karakter en emotie in gecontroleerd licht.',
        'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=1974&auto=format&fit=crop'
    ],
    [
        'id' => 'architecture',
        'title' => 'Architectuur / Landschap',
        'description' => 'Lijnen, vormen en de omgeving.',
        'image' => 'https://images.unsplash.com/photo-1518780664697-55e3ad937233?q=80&w=2065&auto=format&fit=crop'
    ],
    [
        'id' => 'product',
        'title' => 'Productfotografie',
        'description' => 'Commerciële perfectie en detail.',
        'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=2070&auto=format&fit=crop'
    ],
    [
        'id' => 'best',
        'title' => 'Mooiste Foto\'s',
        'description' => 'Mijn persoonlijke favorieten.',
        'image' => 'https://images.unsplash.com/photo-1492691527719-9d1e07e534b4?q=80&w=2071&auto=format&fit=crop'
    ],
];

$portfolioItems = [
    // Motion category
    [
        'id' => 'm1',
        'categoryId' => 'motion',
        'title' => 'De Eindsprint',
        'image' => 'https://images.unsplash.com/photo-1552674605-469455302436?q=80&w=2070&auto=format&fit=crop',
        'description' => 'Het beslissende moment tijdens de lokale atletiekwedstrijd.',
        'whyInteresting' => 'De gezichtsuitdrukking toont pure wilskracht en uitputting.',
        'critique' => 'De onscherpe achtergrond isoleert het onderwerp goed. De sluitertijd was perfect om de beweging te bevriezen maar toch snelheid te suggereren.',
        'specs' => ['shutter' => '1/1000s', 'aperture' => 'f/2.8', 'iso' => '400', 'camera' => 'Sony A7IV'],
        'analysis' => [
            'composition' => 'Centraal perspectief met leidende lijnen van de baan.',
            'frame' => 'Ruim kader om de context van het stadion te tonen.',
            'format' => 'Landschap',
            'perspective' => 'Ooghoogte',
            'lighting' => ['direction' => 'Tegenlicht', 'intensity' => 'Harde zon', 'source' => 'Natuurlijk'],
            'depthOfField' => 'Gering (f/2.8)',
        ],
    ],
    [
        'id' => 'm2',
        'categoryId' => 'motion',
        'title' => 'Urban Dance',
        'image' => 'https://images.unsplash.com/photo-1535525153412-5a42439a210d?q=80&w=2070&auto=format&fit=crop',
        'description' => 'Breakdancer in de lucht bevroren tegen een betonnen achtergrond.',
        'whyInteresting' => 'Het contrast tussen de menselijke vorm en de harde architectuur.',
        'critique' => 'Lichtval is mooi, maar de rechterhoek leidt wat af.',
        'specs' => ['shutter' => '1/2000s', 'aperture' => 'f/4', 'iso' => '800', 'camera' => 'Canon R6'],
        'analysis' => [
            'composition' => 'Driehoekscompositie door de ledematen.',
            'frame' => 'Full body shot.',
            'format' => 'Landschap',
            'perspective' => 'Kikkerperspectief',
            'lighting' => ['direction' => 'Zijlicht', 'intensity' => 'Diffuus (bewolkt)', 'source' => 'Daglicht'],
            'depthOfField' => 'Middelgroot',
        ],
    ],
    [
        'id' => 'm3',
        'categoryId' => 'motion',
        'title' => 'Watersprong',
        'image' => 'https://images.unsplash.com/photo-1519315901367-f34ff9154487?q=80&w=2070&auto=format&fit=crop',
        'description' => 'Duiker in perfecte vorm.',
        'whyInteresting' => 'Het bevriezen van het water rond de duiker.',
        'critique' => 'Timing was cruciaal voor deze opname.',
        'specs' => ['shutter' => '1/2500s', 'aperture' => 'f/5.6', 'iso' => '640', 'camera' => 'Nikon D850'],
    ],
    
    // Portrait category
    [
        'id' => 'p1',
        'categoryId' => 'portrait',
        'title' => 'De CEO',
        'image' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=1974&auto=format&fit=crop',
        'description' => 'Zakelijk portret met een naderbare uitstraling.',
        'whyInteresting' => 'De blik is direct en zelfverzekerd.',
        'critique' => 'Rembrandt-verlichting is goed gelukt, schaduwzijde niet te donker.',
        'specs' => ['shutter' => '1/160s', 'aperture' => 'f/8', 'iso' => '100', 'camera' => 'Sony A7IV'],
    ],
    [
        'id' => 'p2',
        'categoryId' => 'portrait',
        'title' => 'Natuurlijk Licht',
        'image' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=1974&auto=format&fit=crop',
        'description' => 'Portret in natuurlijk licht bij een raam.',
        'whyInteresting' => 'Zachte schaduwovergangen door diffuus licht.',
        'critique' => 'Ogen zijn scherp, achtergrond heeft goede bokeh.',
        'specs' => ['shutter' => '1/200s', 'aperture' => 'f/2.0', 'iso' => '320', 'camera' => 'Canon EOS R5'],
    ],
    [
        'id' => 'p3',
        'categoryId' => 'portrait',
        'title' => 'Studio Portret',
        'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=1974&auto=format&fit=crop',
        'description' => 'Klassiek studio portret met twee lichtbronnen.',
        'whyInteresting' => 'Perfecte belichtingsbalans tussen key en fill light.',
        'critique' => 'Goed gebruik van negatieve ruimte.',
        'specs' => ['shutter' => '1/125s', 'aperture' => 'f/11', 'iso' => '100', 'camera' => 'Sony A7IV'],
    ],
    
    // Architecture category
    [
        'id' => 'a1',
        'categoryId' => 'architecture',
        'title' => 'Moderne Lijnen',
        'image' => 'https://images.unsplash.com/photo-1518780664697-55e3ad937233?q=80&w=2065&auto=format&fit=crop',
        'description' => 'Abstract architectuurbeeld met sterke lijnen.',
        'whyInteresting' => 'Het spel van licht en schaduw creëert diepte.',
        'critique' => 'Symmetrie is goed bewaard gebleven.',
        'specs' => ['shutter' => '1/500s', 'aperture' => 'f/8', 'iso' => '200', 'camera' => 'Fuji X-T4'],
    ],
    [
        'id' => 'a2',
        'categoryId' => 'architecture',
        'title' => 'Perspectief',
        'image' => 'https://images.unsplash.com/photo-1486718448742-163732cd1544?q=80&w=2070&auto=format&fit=crop',
        'description' => 'Kijkend omhoog tussen moderne gebouwen.',
        'whyInteresting' => 'De convergerende lijnen leiden het oog naar het midden.',
        'critique' => 'Helderheid van de lucht vormt mooi contrast.',
        'specs' => ['shutter' => '1/800s', 'aperture' => 'f/11', 'iso' => '100', 'camera' => 'Canon EOS R6'],
    ],
    
    // Product category
    [
        'id' => 'pr1',
        'categoryId' => 'product',
        'title' => 'Koptelefoon Detail',
        'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=2070&auto=format&fit=crop',
        'description' => 'Productfoto met focus op materiaal en details.',
        'whyInteresting' => 'Reflecties tonen de kwaliteit van het oppervlak.',
        'critique' => 'Achtergrond is clean en niet storend.',
        'specs' => ['shutter' => '1/160s', 'aperture' => 'f/16', 'iso' => '100', 'camera' => 'Sony A7IV'],
    ],
    [
        'id' => 'pr2',
        'categoryId' => 'product',
        'title' => 'Horloge',
        'image' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=1999&auto=format&fit=crop',
        'description' => 'Luxe horloge met dramatische verlichting.',
        'whyInteresting' => 'Glans en reflecties benadrukken de premium kwaliteit.',
        'critique' => 'Scherptediepte isoleert het product perfect.',
        'specs' => ['shutter' => '1/125s', 'aperture' => 'f/11', 'iso' => '100', 'camera' => 'Nikon Z7'],
    ],
    
    // Best photos
    [
        'id' => 'b1',
        'categoryId' => 'best',
        'title' => 'Gouden Uur',
        'image' => 'https://images.unsplash.com/photo-1492691527719-9d1e07e534b4?q=80&w=2071&auto=format&fit=crop',
        'description' => 'Silhouet tijdens zonsondergang.',
        'whyInteresting' => 'Perfecte timing en de warme kleuren van het gouden uur.',
        'critique' => 'Een van mijn favoriete opnames vanwege de sfeer.',
        'specs' => ['shutter' => '1/2000s', 'aperture' => 'f/2.8', 'iso' => '200', 'camera' => 'Sony A7IV'],
    ],
    [
        'id' => 'b2',
        'categoryId' => 'best',
        'title' => 'Reflectie',
        'image' => 'https://images.unsplash.com/photo-1472289065668-ce650ac443d2?q=80&w=2069&auto=format&fit=crop',
        'description' => 'Perfecte reflectie in water.',
        'whyInteresting' => 'De symmetrie tussen realiteit en reflectie.',
        'critique' => 'Prachtige kleuren en compositie.',
        'specs' => ['shutter' => '1/250s', 'aperture' => 'f/8', 'iso' => '100', 'camera' => 'Canon EOS R5'],
    ],
];
?>
